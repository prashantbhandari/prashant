@extends("admin.common.index")
@section("body")

<div class="content-wrapper">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/admin">Dashboard</a>
      </li>
    <li class="breadcrumb-item active"><a href="/admin/notice-title">Notice-Titles</a></li>
      <li class="breadcrumb-item active">Notice-Images</li>

    </ol>
    <div class="container-fluid">

    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-info-circle "></i> Notice Images
				<a class="btn-sm btn-success pull-right" href data-toggle="modal" data-target="#addModal" onclick="add()">Add Notices</a>

      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>S.N</th>
                <th>Notice Image</th>
                <th>Option</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>S.N</th>
                <th>Notice Image</th>
                <th>Option</th>                    
              </tr>
            </tfoot>
            <tbody>
              @foreach($title->noticeImages as $notice_image)
                <tr>
                  <td>{{$loop->iteration}}</td>
                <td><img style=" height: 75px;" src="{{ URL::to('images/noticeImages/'.$notice_image->image) }}"></img></td>
                  <td>
                    <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal" onclick="delete_notice({{$notice_image->id}})">Delete</button>	
                    <span class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addModal" onclick="edit_notice({{ $notice_image->id }})">Edit</span>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

  

	<!-- Add/Edit modal -->
	<div id="addModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

	<!-- Modal content-->
			<div class="modal-content">
				<form method="post" enctype="multipart/form-data">
					{{csrf_field()}}
					<input type="hidden" name="id" id="id" >
          <input type="hidden" name="title_image_id" id="title_image_id" value="{{$title->id}}">
					<div class="modal-body">
						<div class="form-group">
							<label>Add a Notice.</label>
							<input class="form-control image-filename" value="" type="file" name="image" id="image" accept="image/gif, image/jpeg, image/png" onchange="readURL(this);" required/>
            </div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary pull-left">Save</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>

		</div>
	</div>

		<!-- Add/Edit modal -->


		<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Delete Notice</h4>
        <button type="button" class="close" data-dismiss="modal">×</button>
      </div>
      <div class="modal-body">
            <h1 class="text-center"><i class="fa fa-exclamation-circle" style="color: red;"></i>
                
            </h1>
            <p>Are you sure you want to delete the Notice?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" onclick="delete_confirm()">Delete</button>                
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


{{-- Add Delete Edit --}}
<script>
	var deleteId = -1;
  function add(){
		$("#id").val("");
		token = $("input[name='_token']").val();
    $('#title').val("");
		$("input[name='_token']").val(token);
	}

  function edit_notice(id){
		$.get('/admin/notice-image/'+id+'/api', function(data, status){
			$("#id").val(data.id);
      $("#title_image_id").val(data.title_image_id);
		});
	}

	function delete_notice(id){
		deleteId = id;
	}

	function delete_confirm(){
		window.location.href = "/admin/notice-image/"+deleteId+"/delete";
	}

</script>

@endsection
