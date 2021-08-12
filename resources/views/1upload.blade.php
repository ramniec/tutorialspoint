<html lang="en">
<head>
  <title>Laravel Multiple File Uploader - TP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  
<div class="container lst">
  
@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Sorry!</strong> There is some problem with your file selection input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
</div>
@endif
  
<h3 class="well">Laravel Multiple File Uploader - TP </h3>
 
<form method="post" action="{{route('uploader.store')}}" enctype="multipart/form-data">
    @csrf
  
    <div class="input-group hdtuto control-group lst increment" >
      <input type="file" name="filenames[]" multiple="" class="myfrm form-control">
    </div>
  
    <button type="submit" class="btn btn-success" style="margin-top:10px">Upload</button>
  
</form>

@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div> 
@endif
<div class="card-body">
  <form method="post" action="{{url('uploader_submit')}}">
    @csrf
          <table id="example2" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>File Name</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
              @if ($db_files->count() == 0)
                <tr>
                    <td colspan="5">No Files data to display.</td>
                </tr>
              @endif
              @php $i=1; @endphp
              @foreach($db_files as $db_file)
                  <tr>
                    <td>{{$i}}.</td>
                    <td>{{$db_file->filename}}</td>
                    <td>{{$db_file->filetype}}</td>                    
                    <td><?php echo ($db_file->status==1?'<span class="badge badge-success">Active</span>':'<span class="badge badge-danger">InActive</span>');?></td>
                    <td>{{$db_file->created_at}}</td>
                    <td class="project-actions text-right">
                      <input type="checkbox" name="checked_ids[]" value="{{$db_file->id}}" class="form-check-input"><br />
                      <!-- <form action="{{ route('uploader.destroy', $db_file->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" title="delete" class="del-submit" onclick="return confirm('Are you sure you want to delete?')">
                            X
                          </button>
                      </form> -->
                      </td>
                  </tr>
                  @php $i++; @endphp
                  @endforeach
                  <tr>                    
                    <td colspan="5"><div class="d-flex justify-content-center"></div></td></tr>
                  </tbody>
                </table>        
          
        <button type="submit" class="btn btn-success" style="margin-top:10px">Move to Server</button>
  
</form>  
</div>    
</div>

  
</body>
</html>