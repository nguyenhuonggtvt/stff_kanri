@extends('layouts.master')

@section('title', 'Staff Lession')

@section('scripts')
<script src="{{ mix('js/staff_lession.js') }}"></script>
@endsection

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Staff Lesson</h1>
<table class="table table-bordered">
    <tbody>
        <tr>
        <td class="font-weight-bold" style="width: 20%">Name</td>
        <td style="width: 80%">松井　大介</td>
        </tr>
    </tbody>
</table>

<!--Search form-->
<form>
    <div class="form-row">
        <div class="form-group col-md-3">
        <label for="inputState">Place</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>----</option>
            <option>Shibuya</option>
            <option>Jiyugaoka</option>
            <option>Kichijoji</option>
        </select>
        </div>
        <div class="form-group col-md-3">
        <label for="inputState">Class</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>----</option>
            <option>ES020</option>
            <option>ES010</option>
            <option>ES3030</option>
        </select>
        </div>
        <div class="form-group col-md-3">
        <label for="inputState">Type</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>----</option>
            <option>On-site</option>
            <option>Online</option>
        </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
        <label for="inputState">From</label>
        <input type="text" id="example" class="form-control datepicker-control">
        </div>
        <div class="form-group col-md-3">
        <label for="inputState">To</label>
        <input type="text" id="example" class="form-control datepicker-control">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Search</button>
</form>
<p></p>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>ClassID</th>
                <th>Type</th>
                <th>Class</th>
                <th>Place</th>
                <th>Building</th>
                <th>Room</th>
                <th>Day</th>
                <th>Time</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1000001</td>
                <td>On-site</td>
                <td>ES020</td>
                <td>Shibuya</td>
                <td>J Plaza</td>
                <td>3A</td>
                <td>2020-10-15</td>
                <td>18:00 - 20:00</td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>

@stop
