@extends('layouts.master')

@section('title', 'Evaluation Search')

@section('scripts')
    <script src="{{ mix('js/evaluation_search.js') }}"></script>
@endsection

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Evaluation Search</h1>

<!--Search form-->
<form>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputState">From</label>
            <input type="text" id="example" class="form-control datepicker-control">
        </div>
        <div class="form-group col-md-3">
            <label for="inputState">To</label>
            <input type="text" id="example" class="form-control datepicker-control">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputState">Teacher</label>
            <select class="form-control select2-control" id="teacherSelect">
                <option value="">Select teacher</option>
                @foreach ($aryEmployee as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->last_name }} {{ $employee->first_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="inputState">Observer</label>
            <select class="form-control select2-control" id="observerSelect">
                <option value="">Select Observer</option>
                @foreach ($aryEmployee as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->last_name }} {{ $employee->first_name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <button class="btn btn-primary" @click="handleClickSearch()" :disabled="isClick">Search</button>
</form>
<p></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="row">
            <div class="col-md-7 col-lg-8">
                <div class="form-group form-inline">
                    <span class="mr-1">Show</span>
                    <select class="form-control" style="width: 130px;" @change="handleChangePerPage($event)">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="-1">All</option>
                    </select>
                    <span class="ml-1">entries</span>
                </div>
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="form-group input-group">
                    <input type="text" placeholder="Search keyword"
                            id="txt-search-key-word"
                            aria-describedby="addon-search-user"
                            class="form-control"
                            @keyup.enter="handleSearchKeyWord()">
                    <div class="input-group-append">
                        <button type="button" id="addon-search-user" class="btn btn-secondary" @click="handleSearchKeyWord()" :disabled="isClick">
                            <i class="fa fa-search mr-1"></i>Search
                        </button>
                    </div>
                </div>
            </div>
        </div>
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
                <tbody v-if="searchResults.length > 0">
                <tr v-for="(evaluation, key, index) in searchResults" :key="index">
                    <td>
                        <button class="btn btn-sm btn-info" @click="goToDetail(evaluation.id)">Detail</button>
                    </td>
                    <td>@{{ evaluation.evaluation_date }}</td>
                    <td>@{{ evaluation.teacher_id }}</td>
                    <td>@{{ evaluation.observer_id }}</td>
                    <td><a class="btn btn-sm btn-success" href="#" role="button">Download</a></td>
                </tr>
                </tbody>
                <tbody v-else>
                <tr>
                    <td class="text-center" colspan="5">No data available</td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- Pagination -->
        <div class="row" v-if="searchResults.length > 0">
            <div class="col-md-4">

            </div>
            <div class="col-md-8">
                <paginate
                    v-model="currentPage"
                    :page-count="totalPage"
                    :page-range="perPage"
                    :page-range="5"
                    :click-handler="handlePaginate"
                    :prev-text="'Prev'"
                    :next-text="'Next'"
                    :container-class="'pagination pull-right'"
                    :page-class="'page-item'"
                    :page-link-class="'page-link'"
                    :prev-class="'page-item'"
                    :prev-link-class="'page-link'"
                    :next-class="'page-item'"
                    :next-link-class="'page-link'">
                </paginate>
            </div>
        </div>
    </div>
</div>

@stop
