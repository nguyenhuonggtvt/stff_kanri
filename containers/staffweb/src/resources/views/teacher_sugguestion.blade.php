@extends('layouts.master')

@section('title', 'Teacher Sugguestion')

@section('scripts')
    <script src="{{ mix('js/teacher_sugguestion.js') }}"></script>
@endsection

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Staff Search</h1>

<hr class="sidebar-divider">

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
                <option>ES150</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="inputState">Role</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>----</option>
                <option>Japanese Teacher</option>
                <option>Native Teacher</option>
                <option>TA</option>
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
            </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>

@stop
