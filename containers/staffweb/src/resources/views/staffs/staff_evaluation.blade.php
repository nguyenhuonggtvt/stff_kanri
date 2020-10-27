@extends('layouts.master')

@section('title', 'Staff Evaluation')

@section('scripts')
<script src="{{ mix('js/staff_evaluation.js') }}"></script>
@endsection

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Staff Evaluation</h1>
<table class="table table-bordered">
    <tbody>
        <tr>
            <td class="font-weight-bold" style="width: 20%">Name</td>
            <td style="width: 80%">松井　大介</td>
        </tr>
    </tbody>
</table>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th></th>
                <th>Day</th>
                <th>Instructor</th>
                <th>Observer</th>
                <th>Sheet</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><a class="btn btn-info" href="evaluation_detail.html" role="button">Detail</a></td>
                <td>2020-10-25</td>
                <td>松井 大介</td>
                <td>フォン</td>
                <td><a class="btn btn-success" href="#" role="button">Download</a></td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>

@stop
