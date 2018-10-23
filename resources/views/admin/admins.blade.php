@extends("admin.common.index")
@section("body")

<div class="content-wrapper">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="home">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Admins</li>
    </ol>
    <div class="container-fluid">

    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-map-marker "></i> Admins
        <a class="btn-sm btn-success pull-right" href="{{route('register')}}">Register Admin</a>

      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
                <th>Option</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
                <th>Option</th>                    
              </tr>
            </tfoot>
            <tbody>
              @foreach(App\User::all() as $user)
                <tr>
                  <td>{{$loop->iteration}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->city->name}}</td>
                <td>
                    <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal" onclick="delete_admin({{ $user->id }})">Delete</button>
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

  





		<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Delete Admin</h4>
        <button type="button" class="close" data-dismiss="modal">×</button>
      </div>
      <div class="modal-body">
          <h1 class="text-center"><i class="fa fa-exclamation-circle" style="color: red;"></i></h1>
          <p class="text-center" style="color: red;">Delete this admin <b>permanently</b?</p>
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

	function delete_admin(id){
		deleteId = id;
	}

	function delete_confirm(){
		window.location.href = "/superadmin/admins/"+deleteId+"/delete";
	}

</script>
  

@endsection


