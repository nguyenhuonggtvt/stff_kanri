@extends('layouts.master')

@section('title', 'Schedule Leson Substitute')

@section('scripts')
    <script src="{{ mix('js/schedule_lession_substitute.js') }}"></script>
@endsection

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Schedule Leson Substitute</h1>

<hr class="sidebar-divider">

<!-- Substitute form-->
<form>
    <div class="form-group row">
        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label font-weight-bold">Place</label>
        <div class="col-sm-10">
        Shibuya
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label font-weight-bold">Building</label>
        <div class="col-sm-10">
        J plaza
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label font-weight-bold">Room</label>
        <div class="col-sm-10">
        3A
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label font-weight-bold">Type</label>
        <div class="col-sm-10">
        On-site
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label font-weight-bold">Date</label>
        <div class="col-sm-10">
        2020-10-15  18:00 - 20:00
        </div>
    </div>
    <div class="form-group row">
        <label for="inputDate" class="col-sm-2 col-form-label font-weight-bold">Teacher J</label>
        <div class="col-sm-3">
        松井　大介　matsu daisuke
        </div>
        <div class="col-sm-1">
            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg>
        </div>
        <select id="teacher_j" style="width: 300px;" class="form-control select2-control">
            <option>----</option>
            <option>松井　大介　matsui daisuke</option>
            <option>宮本　学 miyamoto manabu
            </option>
        </select>
    </div>
    <div class="form-group row">
        <label for="inputDate" class="col-sm-2 col-form-label font-weight-bold">Teacher E</label>
        <div class="col-sm-3">
        soulivong saysony
        </div>
        <div class="col-sm-1">
            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg>
        </div>
        <select id="teacher_e" style="width: 300px;" class="form-control select2-control">
            <option>----</option>
            <option>松井　大介　matsui daisuke</option>
            <option>宮本　学 miyamoto manabu
            </option>
        </select>
    </div>
    <div class="form-group row">
        <label for="inputDate" class="col-sm-2 col-form-label font-weight-bold">TA</label>
        <div class="col-sm-3">
        Phong Nguyen
        </div>
        <div class="col-sm-1">
            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg>
        </div>
        <select id="teacher_ta" style="width: 300px;" class="form-control select2-control">
            <option>----</option>
            <option>松井　大介　matsui daisuke</option>
            <option>宮本　学 miyamoto manabu
            </option>
        </select>
    </div>
    <div class="form-group row">
        <label for="textarea" class="col-sm-2 col-form-label">Memo</label>
        <div class="col">
            <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="4"></textarea>
        </div>
    </div>
    <!-- Button -->
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Subtutite</button>
        </div>
    </div>
</form>

@stop
