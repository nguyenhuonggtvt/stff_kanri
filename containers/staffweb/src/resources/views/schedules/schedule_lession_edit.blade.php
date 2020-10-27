@extends('layouts.master')

@section('title', 'Schedule Leson Edit')

@section('scripts')
    <script src="{{ mix('js/schedule_lession_edit.js') }}"></script>
@endsection

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Schedule Leson Edit</h1>

<hr class="sidebar-divider">

<!-- Register form-->
<form>
    <div class="form-group row">
        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Place</label>
        <div class="col-sm-10">
            <select class="form-control" id="exampleFormControlSelect1">
                <option>----</option>
                <option selected>Shibuya</option>
                <option>Jiyugaoka</option>
                <option>Kichijoji</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Building</label>
        <div class="col-sm-10">
            <select class="form-control" id="exampleFormControlSelect1">
                <option>----</option>
                <option selected>J Plaza</option>
                <option>O N</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Room</label>
        <div class="col-sm-10">
            <select class="form-control" id="exampleFormControlSelect1">
                <option>----</option>
                <option selected> 3A</option>
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
    <div class="form-group row">
        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Class</label>
        <div class="col-sm-10">
            <select class="form-control" id="exampleFormControlSelect1">
                <option selected>ES110</option>
                <option>ES210</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Type</label>
        <div class="col-sm-10">
        <select class="form-control" id="exampleFormControlSelect1">
            <option selected>On-site</option>
            <option>Online</option>
        </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Teacher J</label>
        <div class="col-sm-3">
            <select class="form-control select2-control" id="teacher_j">
                <option>----</option>
                <option selected>松井 大介 matsui daisuke</option>
                <option>塚本 武 tsukamoto takeshi</option>
            </select>
        </div>
        <div class="col-sm-1"></div>
        <label for="inputState" class="col-sm-2 col-form-label">Sub Teacher J</label>
        <div class="col-sm-3">
            <select class="form-control select2-control" id="sub_teacher_j">
                <option>----</option>
                <option>松井 大介 matsui daisuke</option>
                <option>塚本 武 tsukamoto takeshi</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Teacher E</label>
        <div class="col-sm-3">
            <select class="form-control select2-control" id="teacher_e">
                <option>----</option>
                <option>松井 大介 matsui daisuke</option>
                <option selected>塚本 武 tsukamoto takeshi</option>
            </select>
        </div>
        <div class="col-sm-1"></div>
        <label for="inputState" class="col-sm-2 col-form-label">Sub Teacher E</label>
        <div class="col-sm-3">
            <select class="form-control select2-control" id="sub_teacher_e">
                <option>----</option>
                <option>松井 大介 matsui daisuke</option>
                <option>塚本 武 tsukamoto takeshi</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">TA</label>
        <div class="col-sm-3">
            <select class="form-control select2-control" id="teacher_ta">
                <option>----</option>
                <option>松井 大介 matsui daisuke</option>
                <option>塚本 武 tsukamoto takeshi</option>
            </select>
        </div>
        <div class="col-sm-1"></div>
        <label for="inputState" class="col-sm-2 col-form-label">Sub TA</label>
        <div class="col-sm-3">
            <select class="form-control select2-control" id="sub_teacher_ta">
                <option>----</option>
                <option>松井 大介 matsui daisuke</option>
                <option>塚本 武 tsukamoto takeshi</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputDate" class="col-sm-2 col-form-label">Start date</label>
        <div class="col-sm-3">
            <input type="text" class="form-control datepicker-control" value="2020-10-25">
        </div>
        <div class="col-sm-2">
            <select class="form-control" id="time1">
                <option>08:00</option>
                <option>08:15</option>
                <option>08:30</option>
                <option>08:45</option>
                <option>09:00</option>
                <option>----</option>
                <option>21:00</option>
                <option>21:15</option>
                <option>21:30</option>
                <option>21:45</option>
                <option>22:00</option>
            </select>
        </div>
        -
        <div class="col-sm-2">
            <select class="form-control" id="time1">
                <option>08:00</option>
                <option>08:15</option>
                <option>08:30</option>
                <option>08:45</option>
                <option selected>09:00</option>
                <option>----</option>
                <option>21:00</option>
                <option>21:15</option>
                <option>21:30</option>
                <option>21:45</option>
                <option>22:00</option>
            </select>
        </div>
    </div>

    <!-- Button -->
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>

@stop
