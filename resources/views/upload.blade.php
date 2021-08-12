<html lang="en">
<head>
  <title>Laravel Multiple File Uploader - TP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
</head>
<body>
  
<div class="container lst">
  
<h3 class="well">Laravel Multiple File Uploader - TP </h3> 

@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div> 
@endif
<div class="card-body">
  <form method="post" action="{{url('uploader_submit')}}">
    @csrf
          <table id="datatableID" class="table table-striped table-bordered display" style="width:100%">
                  <thead>
                  <tr>
                    <th data-orderable="false">Select</th>
                    <th>File Name</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th data-orderable="false">Action</th>
                  </tr>
                  </thead>
                  <tbody>
              @if ($db_files->count() == 0)
                <tr>
                    <td colspan="5">No Files data to display.</td>
                </tr>
              @endif
              @foreach($db_files as $db_file)
                  <tr id="did{{$db_file->id}}">
                    <td><input type="checkbox" name="checked_ids[]" value="{{$db_file->id}}" /></td>
                    <td>{{$db_file->filename}}</td>
                    <td>{{$db_file->filetype}}</td>                    
                    <td><?php echo ($db_file->status==1?'<span class="badge badge-success">Success</span>':'<span class="badge badge-danger">Failed</span>');?></td>
                    <td>{{$db_file->created_at->format('d/m/Y H:i a')}}</td>
                    <td class="project-actions text-right">
                      <a href="javascript:void(0)" onclick="FileDelete({{$db_file->id}})" class="btn btn-danger">X</a>
                      </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>         
        <button type="submit" class="btn btn-success" style="margin-top:10px;">Attach Files</button>
  
</form>  
</div>    
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#datatableID').DataTable();
} );
</script>
<script type="text/javascript">
  function FileDelete(id){
    if(confirm("Do you really want to do this?")) {
       $.ajax({
        url:'uploader_delete/'+id,
        type:'DELETE',
        data:{_token:'{{ csrf_token() }}'},
        
        success: function(response){
        $("#did"+id).remove();
      }

       })
     }
  }
</script>
  
</body>
</html>