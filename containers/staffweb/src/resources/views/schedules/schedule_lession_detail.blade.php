@extends('layouts.master')

@section('title', 'Schedule Leson Detail')

@section('scripts')
    <script src="{{ mix('js/schedule_lession_detail.js') }}"></script>
@endsection

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Schedule Leson Detail</h1>

<hr class="sidebar-divider">

<!-- Detail info-->
<p>
    <a href="{{ route('scheduleSearchLesson') }}" role="button" class="btn btn-secondary">Back</a>
    <a href="{{ route('scheduleLessionEdit') }}" role="button" class="btn btn-primary">Edit</a>
</p>
<table class="table table-bordered">
<tbody>
    <tr>
        <td class="font-weight-bold" style="width: 20%">Place</td>
        <td style="width: 80%">Shibuya</td>
    </tr>
    <tr>
        <td class="font-weight-bold" style="width: 20%">Building</td>
        <td style="width: 80%">J Plaza</td>
    </tr>
    <tr>
        <td class="font-weight-bold" style="width: 20%">Room</td>
        <td style="width: 80%">3A</td>
    </tr>
    <tr>
        <td class="font-weight-bold" style="width: 20%">Class</td>
        <td style="width: 80%">ES020</td>
    </tr>
    <tr>
        <td class="font-weight-bold" style="width: 20%">Type</td>
        <td style="width: 80%">On-site</td>
    </tr>
    <tr>
        <td class="font-weight-bold" style="width: 20%">Date</td>
        <td style="width: 80%">2020-10-25  18:00 - 20:00</td>
    </tr>
    <tr>
        <td class="font-weight-bold" style="width: 20%">Teacher J</td>
        <td style="width: 80%">
            松井　大介　matsui daisuke
            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg>
            塚本　武 tsukamoto takeshi
        </td>
    </tr>
    <tr>
        <td class="font-weight-bold" style="width: 20%">Teacher E</td>
        <td style="width: 80%">宮本　学　miyamoto manabu</td>
    </tr>
    <tr>
        <td class="font-weight-bold" style="width: 20%">TA</td>
        <td style="width: 80%">Phong Nguyen</td>
    </tr>
    <tr>
        <td class="font-weight-bold" style="width: 20%">Memo</td>
        <td style="width: 80%">Memo</br>Memo</td>
    </tr>
</tbody>
</table>

@stop
