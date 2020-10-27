@extends('layouts.master')

@section('title', 'Staff Search')

@section('scripts')
    <script src="{{ mix('js/staff_search.js') }}"></script>
@endsection

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Staff Search</h1>

<hr class="sidebar-divider">

<!--Search form-->
<form>
    <div class="form-group form-row">
        <div class="form-group col-md-3">
        <label for="inputState">Name 1</label>
        <input placeholder="性（漢字）" type="text" id="example" class="form-control">
        </div>
        <div class="form-group col-md-3">
        <label for="inputState">Name 2</label>
        <input placeholder="名（漢字）" type="text" id="example" class="form-control">
        </div>
        <div class="form-group col-md-3">
        <label for="inputState">Name 3</label>
        <input placeholder="First name" type="text" id="example" class="form-control">
        </div>
        <div class="form-group col-md-3">
        <label for="inputState">Name 4</label>
        <input placeholder="Last name" type="text" id="example" class="form-control">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
        <label for="inputState">Status</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>----</option>
            <option>Recruitment</option>
            <option>Training</option>
            <option>Training completed</option>
            <option>Retired</option>
        </select>
        </div>
        <div class="form-group col-md-3">
        <label for="inputState">Job classification</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>----</option>
            <option>Educational affairs</option>
            <option>Office work</option>
            <option>Academic affairs / office work</option>
        </select>
        </div>
        <div class="form-group col-md-3">
        <label for="inputState">Employee classification</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>----</option>
            <option>Manager</option>
            <option>Employee</option>
            <option>Time instructor</option>
            <option>TA</option>
            <option>Part time</option>
        </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
        <label for="inputState">Rank</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>----</option>
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
        <div class="form-group col-md-3">
        <label for="inputState">Role</label>
        <select id="inputState" class="form-control">
            <option>----</option>
            <option>Japanese Teacher</option>
            <option>Native Teacher</option>
            <option>TA</option>
        </select>
        </div>
        <div class="form-group col-md-3">
        <label for="inputState">Desired place to work</label>
        <select id="inputState" class="form-control">
            <option>----</option>
            <option>Shibuya</option>
            <option>Jiyugaoka</option>
            <option>Kichijoji</option>
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
                <th>Name J</th>
                <th>Name E</th>
                <th>Email</th>
                <th>Tel</th>
                <th>Role</th>
                <th>Place to work</th>
                <th>Lesson</th>
                <th>Evaluation</th>
                <th>Function</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>999</td>
                <td>松井　大介</td>
                <td>matsui daisuke</td>
                <td>matsui@gmail.com</td>
                <td>03 4567 1234</td>
                <td>Japanese teacher</td>
                <td>Shibuya</td>
                <td>
                <a href="{{ route('staffLession') }}">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-week" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                    <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                    </svg>
                </a>
                </td>
                <td><a href="{{ route('staffEvaluation') }}"> <i class="fa fa-tasks"></i></a></td>
                <td>
                <a href="{{ route('staffDetail') }}" class="">
                    <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                    <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg>
                </a>
                <a href="{{ route('staffEdit') }}" class="">
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
