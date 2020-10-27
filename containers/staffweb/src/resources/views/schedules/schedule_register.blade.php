@extends('layouts.master')

@section('title', 'Schedule Register')

@section('scripts')
    <script src="{{ mix('js/schedule_register.js') }}"></script>
@endsection

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Schedule Register</h1>

<hr class="sidebar-divider">

<!-- Register form-->
<form>
<div class="form-group row">
    <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Place</label>
    <div class="col-sm-10">
        <select class="form-control" id="exampleFormControlSelect1">
            <option>----</option>
            <option>Shibuya</option>
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
            <option>J Plaza</option>
            <option>O N</option>
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Room</label>
    <div class="col-sm-10">
        <select class="form-control" id="exampleFormControlSelect1">
            <option>----</option>
            <option>3A</option>
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
            <option>ES110</option>
            <option>ES210</option>
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Type</label>
    <div class="col-sm-10">
        <select class="form-control" id="exampleFormControlSelect1">
            <option>On-site</option>
            <option>Online</option>
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="inputState" class="col-sm-2 col-form-label">Teacher J</label>
    <div class="col">
        <select class="form-control select2-control" id="teacher_j">
            <option>----</option>
            <option>松井 大介 matsui daisuke</option>
            <option>塚本 武 tsukamoto takeshi</option>
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="inputState" class="col-sm-2 col-form-label">Teacher E</label>
    <div class="col">
        <select class="form-control select2-control" id="teacher_e">
            <option>----</option>
            <option>フォン phong</option>
            <option>宮本 学 miyamoto manabu</option>
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="inputState" class="col-sm-2 col-form-label">TA</label>
    <div class="col">
        <select class="form-control select2-control" id="teacher_ta">
            <option>----</option>
            <option>フォン phong</option>
            <option>宮本 学 miyamoto manabu</option>
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="inputState" class="col-sm-2 col-form-label">Repeat event</label>
    <div class="col">
    <table class="table borderless">
        <thead>
        <tr>
            <th class="font-weight-bold" style="width: 20%"></th>
            <th class="font-weight-bold" style="width: 50%"></th>
            <th class="font-weight-bold" style="width: 30%;text-align: right;">
            <a href="#" role="button" class="btn btn-secondary">Enable</a>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="font-weight-bold" style="width: 20%">
            <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio" checked>Weekly
                </label>
            </div>
            </td>
            <td style="width: 50%">
            <div>Repeat every 1 week next days:</div>
            <div class="form-check-inline">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">Monday
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">Tuesday
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">Wednesday
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">Thursday
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">Friday
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">Saturday
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">Sunday
                </label>
            </div>
            </td>
            <td style="width: 30%">
            <p></p>
            <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio1" checked>After
                </label>
                <input type="text" style="width: 50px;"> occurrences
            </div>
            <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio1">End by
                </label>
                <input type="text" style="width: 150px;" class="datepicker-control">
            </div>
            </td>
        </tr>
        </tbody>
    </table>
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
<div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Salary</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputPassword3" placeholder="Salary">
    </div>
</div>
<div class="form-group row">
    <label for="textarea" class="col-sm-2 col-form-label">Description</label>
    <div class="col">
        <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="4"></textarea>
    </div>
</div>

<!-- Button -->
<div class="form-group row">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Register</button>
    </div>
</div>
</form>

@stop
