@extends('layouts/layout')

 @if( Request::segment(1) === "employees" )
    @section('title')
      Employees Page
    @endsection
 @elseif( Request::segment(1) === "users" )
    @section('title')
      Users Page
    @endsection
 @elseif( Request::segment(1) === "positions" )
    @section('title')
      Positions Page
    @endsection
 @elseif( Request::segment(1) === "divisions" )
    @section('title')
      Divisions Page
    @endsection
 @elseif( Request::segment(1) === "particulars" )
    @section('title')
      Particulars Page
    @endsection
 @endif   

@section('bodyclassname')
app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show
@endsection

@section('content')
 
@if( Request::segment(1) === "employees" )
  @include('partials/add-employee-modal') 
  @include('partials/edit-employee-modal')
@elseif( Request::segment(1) === "users" )
  @include('partials/add-user-modal')
  @include('partials/edit-user-modal')
@elseif( Request::segment(1) === "positions")
  @include('partials/add-position-modal')
  @include('partials/edit-position-modal')
@elseif( Request::segment(1) === "divisions")
  @include('partials/add-division-modal')
  @include('partials/edit-division-modal')
@elseif( Request::segment(1) === "particulars")
  @include('partials/add-particular-modal')
  @include('partials/edit-particular-modal')
@endif

  <main class="main">
    <!-- Breadcrumb-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</li>
      <li class="breadcrumb-item">
        <a href="#">Admin</a>
      </li>
      <li class="breadcrumb-item active">Dashboard</li>
      <!-- Breadcrumb Menu-->
      <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
          <a class="btn" href="#">
            <i class="icon-speech"></i>
          </a>
          <a class="btn" href="./">
            <i class="icon-graph"></i>  Dashboard</a>
          <a class="btn" href="#">
            <i class="icon-settings"></i>  Settings</a>
        </div>
      </li>
    </ol>

    <div class="container-fluid">

     
      @if( Request::segment(1) === "employees" )
           @include('partials/employees-crud')
      @elseif( Request::segment(1) === "users" )
           @include('partials/users-crud')
      @elseif( Request::segment(1) === "divisions" )
           @include('partials/divisions-crud')
      @elseif( Request::segment(1) === "positions" )
           @include('partials/positions-crud')
      @else
           @include('partials/particulars-crud')
      @endif

    </div>
  </main> 
</div>
@endsection
