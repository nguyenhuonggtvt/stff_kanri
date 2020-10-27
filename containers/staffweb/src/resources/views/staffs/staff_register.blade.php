@extends('layouts.master')

@section('title', 'Staff Register')

@section('scripts')
    <script src="{{ mix('js/staff_register.js') }}"></script>
@endsection

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Staff Register</h1>

<hr class="sidebar-divider">

<!-- Register Form -->
<form>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
        <div class="col">
        <input type="text" class="form-control" placeholder="性（漢字）">
        </div>
        <div class="col">
        <input type="text" class="form-control" placeholder="名（漢字）">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Romaji name</label>
        <div class="col">
        <input type="text" class="form-control" placeholder="First name">
        </div>
        <div class="col">
        <input type="text" class="form-control" placeholder="Last name">
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
        <select class="form-control" id="exampleFormControlSelect1">
            <option>Recruitment</option>
            <option>Training</option>
            <option>Training completed</option>
            <option>Retired</option>
        </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Job classification</label>
        <div class="col-sm-10">
        <select class="form-control" id="exampleFormControlSelect1">
            <option>Educational affairs</option>
            <option>Office work</option>
            <option>Academic affairs / office work</option>
        </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Employee classification</label>
        <div class="col-sm-10">
        <select class="form-control" id="exampleFormControlSelect1">
            <option>Manager</option>
            <option>Employee</option>
            <option>Time instructor</option>
            <option>TA</option>
            <option>Part time</option>
        </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Rank</label>
        <div class="col-sm-10">
        <select class="form-control" id="exampleFormControlSelect1">
            <option>Level 1</option>
            <option>Level 2</option>
            <option>Level 3</option>
            <option>Level 4</option>
            <option>Level 5</option>
            <option>Level 6</option>
            <option>Level 7</option>
            <option>Level 8</option>
            <option>Level 9</option>
            <option>Level 10</option>
        </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="inputPassword3" placeholder="Address">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="email" class="form-control" id="inputPassword3" placeholder="Email">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Phone Number</label>
        <div class="col-sm-10">
        <input type="tel" class="form-control" id="inputPassword3" placeholder="Phone Number">
        </div>
    </div>
    <!-- Check Box -->
    <div class="form-group row">
        <div class="col-sm-2">Role</div>
        <div class="col-sm-2">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck1">
            <label class="form-check-label" for="gridCheck1">
            Japanese Teacher
            </label>
        </div>
        </div>
        <div class="col-sm-2">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck2">
            <label class="form-check-label" for="gridCheck2">
            Native Teacher
            </label>
        </div>
        </div>
        <div class="col-sm-2">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck3">
            <label class="form-check-label" for="gridCheck3">
            TA
            </label>
        </div>
        </div>
    </div>
    <!-- Check Box -->
    <div class="form-group row">
        <div class="col-sm-2">Desired place to work</div>
        <div class="col-sm-2">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="placeCheck1">
            <label class="form-check-label" for="placeCheck1">
            Shibuya
            </label>
        </div>
        </div>
        <div class="col-sm-2">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="placeCheck2">
            <label class="form-check-label" for="placeCheck2">
            Jiyugaoka
            </label>
        </div>
        </div>
        <div class="col-sm-2">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="placeCheck3">
            <label class="form-check-label" for="placeCheck3">
            Kichijoji
            </label>
        </div>
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
