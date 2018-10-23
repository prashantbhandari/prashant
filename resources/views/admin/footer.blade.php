@extends("admin.common.index")
@section("body")

<div class="content-wrapper">
  
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/admin/home">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">
        Footer
      </li>
    </ol>
    <!-- Example DataTables Card-->
    
    <div class="container-fluid">
     

            <form method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                {{csrf_field()}}
                @if($footer != null)
                <input type="hidden" name="id" id="id" value="{{$footer->id}}" >
                <input type="hidden" name="city_id" id="city_id" value="{{$footer->city->id}}" >
                <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-arrow-down "></i>                 
                            Add Footer informations
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control phon" value="{{$footer->phone}}" placeholder="Phone" name="phone" id="phone" required>
                        <p class="pull-right" id="phon" style="font-size: 12px">100 characters remaining</p>

                    </div>
                    <div class="form-group">
                        <label>Fax</label>
                        <input type="text" class="form-control faxx" value="{{$footer->fax}}" placeholder="Fax" name="fax" id="fax" required>
                        <p class="pull-right" id="faxx" style="font-size: 12px">100 characters remaining</p>

                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control emai" value="{{$footer->email}}" placeholder="Email" name="email" id="email" required>
                        <p class="pull-right" id="emai" style="font-size: 12px">100 characters remaining</p>

                    </div>  
                    <div class="form-group">
                        <label>Website</label>
                        <input type="text" class="form-control web" value="{{$footer->website}}" placeholder="Website" name="website" id="website" required>
                        <p class="pull-right" id="web" style="font-size: 12px">150 characters remaining</p>

                    </div>  
                    <div class="form-group">
                        <label>facebook</label>
                        <input type="text" class="form-control face" value="{{$footer->facebook}}" placeholder="Facebook" name="facebook" id="facebook" required>
                        <p class="pull-right" id="face" style="font-size: 12px">150 characters remaining</p>
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
                <input type="hidden" name="city_id" id="city_id" value="{{Auth::user()->city->id}}">
                <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-arrow-down "></i>                 
                            Add Footer informations
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control phon" placeholder="Phone" name="phone" id="phone" required>
                        <p class="pull-right" id="phon" style="font-size: 12px">100 characters remaining</p>

                    </div>
                    <div class="form-group">
                        <label>Fax</label>
                        <input type="text" class="form-control faxx" placeholder="Fax" name="fax" id="fax" required>
                        <p class="pull-right" id="faxx" style="font-size: 12px">100 characters remaining</p>

                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control emai" placeholder="Email" name="email" id="email" required>
                        <p class="pull-right" id="emai" style="font-size: 12px">150 characters remaining</p>

                    </div>  
                    <div class="form-group">
                        <label>Website</label>
                        <input type="text" class="form-control web" placeholder="Website" name="website" id="website" required>
                        <p class="pull-right" id="web" style="font-size: 12px">150 characters remaining</p>

                    </div>  
                    <div class="form-group">
                        <label>facebook</label>
                        <input type="text" class="form-control face" placeholder="Facebook" name="facebook" id="facebook" required>
                        <p class="pull-right" id="face" style="font-size: 12px">150 characters remaining</p>
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