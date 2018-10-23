@extends("admin.common.index")
@section("body")

<div class="content-wrapper">
  
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/admin/home">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">
        Header
      </li>
    </ol>
    <!-- Example DataTables Card-->
    
    <div class="container-fluid">
     

            <form method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                {{csrf_field()}}

                @if($header != null)
                <input type="hidden" name="id" id="id" value="{{$header->id}}" >
                <input type="hidden" name="city_id" id="city_id" value="{{$header->city->id}}" >
                <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-header "></i>                 
                            Add Header informations
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Municipality Name</label>
                        <input type="text" class="form-control mun" value="{{$header->name}}" placeholder="Name" name="name" id="name" required>
                        <p class="pull-right" id="mun" style="font-size: 12px">100 characters remaining</p>

                    </div>
                    <div class="form-group">
                        <label>Office Name</label>
                        <input type="text" class="form-control office" value="{{$header->office_name}}" placeholder="Office Name" name="office_name" id="office_name" required>
                        <p class="pull-right" id="office" style="font-size: 12px">100 characters remaining</p>

                    </div>
                    <div class="form-group">
                        <label>Office Location</label>
                        <input type="text" class="form-control loc" value="{{$header->location}}" placeholder="Office Location" name="location" id="location" required>
                        <p class="pull-right" id="loc" style="font-size: 12px">100 characters remaining</p>

                    </div>  
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary pull-left">
                            Submit
                    </button>
                </div>
                </div>
                @else

                <input type="hidden" name="id" id="id">
                <input type="hidden" name="city_id" id="city_id" value="{{Auth::user()->city->id}}" >
                <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-header "></i>                 
                            Add Header informations
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Municipality Name</label>
                        <input type="text" class="form-control mun" placeholder="Name" name="name" id="name" required>
                        <p class="pull-right" id="mun" style="font-size: 12px">100 characters remaining</p>

                    </div>
                    <div class="form-group">
                        <label>Office Name</label>
                        <input type="text" class="form-control office" placeholder="Office Name" name="office_name" id="office_name" required>
                        <p class="pull-right" id="office" style="font-size: 12px">100 characters remaining</p>

                    </div>
                    <div class="form-group">
                        <label>Office Location</label>
                        <input type="text" class="form-control loc" placeholder="Office Location" name="location" id="location" required>
                        <p class="pull-right" id="loc" style="font-size: 12px">100 characters remaining</p>

                    </div>  
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary pull-left">
                            Submit
                    </button>
                </div>
                </div>
                @endif
            </form>
  </div>
</div>
@endsection