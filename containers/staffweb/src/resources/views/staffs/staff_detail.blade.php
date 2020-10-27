@extends('layouts.master')

@section('title', 'Staff Detail')

@section('scripts')
<script src="{{ mix('js/staff_detail.js') }}"></script>
@endsection

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Staff Detail</h1>

<!-- Detail info-->
<p>
    <a href="{{ route('staffSearch') }}" role="button" class="btn btn-secondary">Back</a>
    <a href="{{ route('staffEdit') }}" role="button" class="btn btn-primary">Edit</a>
    <a href="#" role="button" class="btn btn-danger">Delete</a>
</p>

<table class="table table-bordered">
    <tbody>
        <tr>
        <td class="font-weight-bold" style="width: 20%">Name J</td>
        <td style="width: 80%">松井　大介</td>
        </tr>
        <tr>
        <td class="font-weight-bold" style="width: 20%">Name E</td>
        <td style="width: 80%">matsui daisuke</td>
        </tr>
        <tr>
        <td class="font-weight-bold" style="width: 20%">Status</td>
        <td style="width: 80%">Recruitment</td>
        </tr>
        <tr>
        <td class="font-weight-bold" style="width: 20%">Job classification</td>
        <td style="width: 80%">Educational affairs</td>
        </tr>
        <tr>
        <td class="font-weight-bold" style="width: 20%">Employee classification</td>
        <td style="width: 80%">Manager</td>
        </tr>
        <tr>
        <td class="font-weight-bold" style="width: 20%">Rank</td>
        <td style="width: 80%">Level 1</td>
        </tr>
        <tr>
        <td class="font-weight-bold" style="width: 20%">Address</td>
        <td style="width: 80%">東京</td>
        </tr>
        <tr>
        <td class="font-weight-bold" style="width: 20%">Mail</td>
        <td style="width: 80%">matsui@gmail.com</td>
        </tr>
        <tr>
        <td class="font-weight-bold" style="width: 20%">Tel</td>
        <td style="width: 80%">03 4567 1234</td>
        </tr>
        <tr>
        <td class="font-weight-bold" style="width: 20%">Role</td>
        <td style="width: 80%">Japanese Teacher</td>
        </tr>
        <tr>
        <td class="font-weight-bold" style="width: 20%">Desired place to work</td>
        <td style="width: 80%">Shibuya</td>
        </tr>
    </tbody>
</table>

@stop
