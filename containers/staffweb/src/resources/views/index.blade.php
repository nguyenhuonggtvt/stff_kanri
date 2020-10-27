@extends('layouts.master')

@section('title', 'Staff Management')

@section('scripts')
    <script src="{{ mix('js/index.js') }}"></script>
@endsection

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Wellcome to Staff Management</h1>
<div class="row">
    <div class="col-12">
        This site will manage staffs and more...
    </div>
    <div class="col-12">
        <a href="#" class="btn btn-primary btn-circle">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="btn btn-success btn-circle">
            <i class="fas fa-check"></i>
          </a>
          <a href="#" class="btn btn-info btn-circle">
            <i class="fas fa-info-circle"></i>
          </a>
          <a href="#" class="btn btn-warning btn-circle">
            <i class="fas fa-exclamation-triangle"></i>
          </a>
          <a href="#" class="btn btn-danger btn-circle">
            <i class="fas fa-trash"></i>
          </a>
    </div>
    <div class="col-12">

    </div>
</div>

@stop
