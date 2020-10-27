@extends('layouts.master')

@section('title', 'Evaluation Detail')

@section('scripts')
    <script src="{{ mix('js/evaluation_detail.js') }}"></script>
@endsection

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Evaluation Detail</h1>

<!-- Detail info -->
<p>
    <a href="{{ route('evaluationSearch') }}" role="button" class="btn btn-secondary">Back</a>
    <a href="{{ route('evaluationEdit') }}" role="button" class="btn btn-primary">Edit</a>
    <a href="#" role="button" class="btn btn-danger">Delete</a>
</p>

<table class="table table-bordered">
<tbody>
    <tr>
        <td class="font-weight-bold" style="width: 20%">Day</td>
        <td style="width: 80%">2020-10-15</td>
    </tr>
    <tr>
        <td class="font-weight-bold" style="width: 20%">Teacher</td>
        <td style="width: 80%">松井 大介　matsui daisuke</td>
    </tr>
    <tr>
        <td class="font-weight-bold" style="width: 20%">Observer</td>
        <td style="width: 80%">Phong Nguyen</td>
    </tr>
    <tr>
        <td class="font-weight-bold" style="width: 20%">Comment</td>
        <td style="width: 80%">Comment</br>Comment</td>
    </tr>
    <tr>
        <td class="font-weight-bold" style="width: 20%">Sheet</td>
        <td style="width: 80%">
            <a href="#">sheet.docx</a>
            <br><br>
            <a href="#" role="button" class="btn btn-danger">Delete this sheet</a>
        </td>
    </tr>
</tbody>
</table>

@stop
