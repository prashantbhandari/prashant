{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>
                <a href="{{ route('register') }}">Register</a>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @component('components.who')
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends("admin.common.index")
@section("body")

<div class="content-wrapper">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/superadmin">Dashboard</a>
          </li>
        </ol>
        <div class="container-fluid">
  
                <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">SuperAdmin Dashboard</div>
            
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
            
                                @component('components.who')
                                @endcomponent
                            </div>
                        </div>
                    </div>
        <!-- Blank div to give the page height to preview the fixed vs. static navbar-->
        <div style="height: 100%;"></div>
      </div>
      <!-- /.container-fluid-->
      <!-- /.content-wrapper-->
                  
  @endsection



