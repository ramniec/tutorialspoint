<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\File;

class MultiUploaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $db_files = File::where('user_id', '=', 1000)-> get();

        return view('upload')->with(['db_files'=>$db_files]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
                'filenames' => 'required',
                //'filenames.*' => 'mimes:doc,pdf,docx,zip,txt,jpg,jpeg,png,bmp,ppt,pptx'
        ]);


        if($request->hasfile('filenames'))
         {
            foreach($request->file('filenames') as $file)
            {
                
                $db_file= new File();
                $db_file->user_id=1000;
                $db_file->source='LOCAL_PC';
                $db_file->source_url='';
                $db_file->save(); 


                $filenamewithextension = $file->getClientOriginalName();
                $filetype = $file->getClientMimeType();
                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
         
                //get file extension
                $extension = $file->getClientOriginalExtension();
     
                $filenametostore = $filename.'_'.time().'.'.$extension;
                
                //Upload File to Public storage
                $file->move(public_path().'/files_library/', $filenametostore); 

                //Upload File to s3
                //Storage::disk('s3')->put('files_library/'.$db_file->user_id.'/'.$filenametostore, fopen($file, 'r+'), 'public');

                $db_file->filename=$filenametostore;
                $db_file->filetype=$extension;
                $db_file->save(); 
            }
         }


        return back()->with('success', 'Your files has been uploaded successfully.');
    }

    public function MoveToServer(Request $request)
    {

        $checked_ids = $request->input('checked_ids');
        $db_files = File::where('user_id', '=', 1000)
        ->whereIn('id', $checked_ids)-> get();
       dd($db_files);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        File::where('id', '=', $id)->delete();

        return redirect()->route('uploader.index')->with('success', 'File deleted successfully');
    }
}
