<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use App\Models\File;

class DropzoneController extends Controller
{
 

    public function index()
    {
        return view('dropzone');
    }
 
 
    public function store(Request $request)
    {
        $user_id = 1000; // define logged in user id here
        $file = $request->file('file');

        $filenamewithextension = $file->getClientOriginalName();
        $filetype = $file->getClientMimeType();
        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
         
        //get file extension
        $extension = $file->getClientOriginalExtension();
     
        $filenametostore = $filename.'.'.$extension;
                
        //Upload File to Public storage
        $file->move(public_path().'/dropzone_files/', $filenametostore); 

        //Upload File to s3
        //Storage::disk('s3')->put('files_library/'.$user_id.'/'.$filenametostore, fopen($file, 'r+'), 'public');


        $db_file = new File();
        $db_file->user_id=$user_id;
        $db_file->source='LOCAL_PC';
        $db_file->filename = $filenametostore;
        $db_file->filetype=$extension;
        $db_file->save();
        return response()->json(['success'=>$filenametostore]);
    }
    
    public function destroy(Request $request) {
        $filename =  $request->get('filename');
        File::where('filename', $filename)->delete();
        $path = public_path().'/dropzone_files/'.$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;
    } 

}
