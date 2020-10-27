@extends('layouts.master')

@section('title', 'Evaluation Input')

@section('scripts')
    <script src="{{ mix('js/evaluation_input.js') }}"></script>
@endsection

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Evaluation Input</h1>

<!--Input form-->
<form>
<div class="form-group row">
    <label for="inputDate" class="col-sm-2 col-form-label">Day</label>
    <div class="col">
        <input type="text" class="form-control datepicker-control">
    </div>
</div>
<div class="form-group row">
    <label for="inputState" class="col-sm-2 col-form-label">Teacher</label>
    <div class="col">
        <select class="form-control select2-control" id="teacherSelect">
            <option>----</option>
            <option>松井 大介 matsui daisuke</option>
            <option>塚本 武 tsukamoto takeshi</option>
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="inputState" class="col-sm-2 col-form-label">Observer</label>
    <div class="col">
        <select class="form-control select2-control" id="observerSelect">
            <option>----</option>
            <option>フォン phong</option>
            <option>宮本 学 miyamoto manabu</option>
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="textarea" class="col-sm-2 col-form-label">Comment</label>
    <div class="col">
        <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10"></textarea>
    </div>
</div>
<div class="form-group row">
    <label for="textarea" class="col-sm-2 col-form-label">Sheet</label>
    <div class="col">
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
</div>

<!-- Button -->
<div class="form-group row">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>

@stop
