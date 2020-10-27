@extends('layouts.master')

@section('title', 'Schedule Search')

@section('scripts')
    <script src="{{ mix('js/schedule_search.js') }}"></script>
@endsection

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Schedule Search</h1>

<hr class="sidebar-divider">

<!--Search form-->
<form>
<div class="form-row">
    <div class="form-group col-md-2">
        <label for="inputAddress">Schedule ID</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="schedule id">
    </div>
    <div class="form-group col-md-2">
        <label for="inputState">Type</label>
        <select id="inputState" class="form-control">
            <option>----</option>
            <option selected>On-site</option>
            <option>Online</option>
        </select>
    </div>
    <div class="form-group col-md-2">
        <label for="inputState">Class</label>
        <select id="inputState" class="form-control">
            <option>----</option>
            <option selected>ES110</option>
            <option>ES210</option>
        </select>
    </div>
    <div class="form-group col-md-2">
        <label for="inputState">Place</label>
        <select id="inputState" class="form-control">
            <option>----</option>
            <option selected>Shibuya</option>
            <option>Jiyugaoka</option>
            <option>Kichijoji</option>
        </select>
    </div>
    <div class="form-group col-md-2">
        <label for="inputState">Building</label>
        <select id="inputState" class="form-control">
            <option>----</option>
            <option selected>J Plaza</option>
            <option>O N</option>
        </select>
    </div>
    <div class="form-group col-md-2">
        <label for="inputState">Room</label>
        <select id="inputState" class="form-control">
            <option>----</option>
            <option selected>3A</option>
            <option> 3B </option>
            <option> 3C </option>
            <option> 3D </option>
            <option> 4E </option>
            <option> 4F </option>
            <option> 4G </option>
            <option> 4H </option>
            <option> 5I </option>
            <option> 5J </option>
            <option> 5K </option>
            <option> 5L </option>
            <option> 6M </option>
            <option> 6N </option>
            <option> 6O </option>
            <option> 6P </option>
        </select>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-3">
        <label for="inputState">Teacher J</label>
        <select id="teacher_j" class="form-control select2-control" aria-hidden="true">
            <option>----</option>
            <option selected>Yoshida</option>
            <option>Matsui</option>
        </select>
    </div>
    <div class="form-group col-md-3">
        <label for="inputState">Teacher E</label>
        <select id="teacher_e" class="form-control select2-control">
            <option>----</option>
            <option selected>Tsukamoto</option>
            <option>Kadotami</option>
        </select>
    </div>
    <div class="form-group col-md-3">
        <label for="inputState">TA</label>
        <select id="teacher_ta" class="form-control select2-control">
            <option>----</option>
            <option selected>Phong</option>
            <option>Huong</option>
        </select>
    </div>
</div>
<div class="form-group form-row">
    <div class="md-form md-outline input-with-post-icon datepicker form-group col-md-3">
        <label for="inputState">From</label>
        <input placeholder="Select date" type="text" id="example" class="form-control datepicker-control">
    </div>
    <div class="md-form md-outline input-with-post-icon datepicker form-group col-md-3">
        <label for="inputState">To</label>
        <input placeholder="Select date" type="text" id="example" class="form-control datepicker-control">
    </div>
    <div class="form-group col-md-3">
        <label for="inputState">Day of Week</label>
        <select id="inputState" class="form-control">
            <option>----</option>
            <option selected>Monday</option>
            <option>Tuesday</option>
            <option>Wednesday</option>
            <option>Thursday</option>
            <option>Friday</option>
            <option>Saturday</option>
            <option>Sunday</option>
        </select>
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
                <th>ID</th>
                <th>Date</th>
                <th>Time</th>
                <th>Type</th>
                <th>Class</th>
                <th>Place</th>
                <th>Building</th>
                <th>Room</th>
                <th>Japanese Teacher</th>
                <th>Native Teacher</th>
                <th>TA</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1001</td>
                <td>2020/10/15</td>
                <td>10:00 - 12:00</td>
                <td>On-site</td>
                <td>ES020</td>
                <td>Shibuya</td>
                <td>J palza</td>
                <td>3A</td>
                <td>松井大介 -> 佐藤 健</td>
                <td>宮本　学</td>
                <td>Nguyen Xuan Phong</td>
                <td>
                <a href="{{ route('scheduleEdit') }}" class="">
                    <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-pencil-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                    </svg>
                </a>
                <a href="#" class="">
                    <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>
                </a>
                </td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>

@stop
