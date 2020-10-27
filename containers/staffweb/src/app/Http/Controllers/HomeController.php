<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        return view('index');
    }

    public function staffSearch()
    {
        return view('staffs.staff_search');
    }

    public function staffRegister()
    {
        return view('staffs.staff_register');
    }

    public function staffEdit()
    {
        return view('staffs.staff_register');
    }

    public function staffDetail()
    {
        return view('staffs.staff_detail');
    }

    public function getStaff()
    {
        return [];
    }

    public function staffLession()
    {
        return view('staffs.staff_lession');
    }

    public function staffEvaluation()
    {
        return view('staffs.staff_evaluation');
    }

    public function teacherSugguestion()
    {
        return view('teacher_sugguestion');
    }

    public function evaluationSearch()
    {
        return view('evaluations.evaluation_search');
    }

    public function evaluationInput()
    {
        return view('evaluations.evaluation_input');
    }

    public function evaluationDetail()
    {
        return view('evaluations.evaluation_detail');
    }

    public function evaluationEdit()
    {
        return view('evaluations.evaluation_input');
    }

    public function scheduleSearch()
    {
        return view('schedules.schedule_search');
    }

    public function scheduleRegister()
    {
        return view('schedules.schedule_register');
    }

    public function scheduleEdit()
    {
        return view('schedules.schedule_register');
    }

    public function scheduleSearchLesson()
    {
        return view('schedules.schedule_search_lesson');
    }

    public function scheduleLessionEdit()
    {
        return view('schedules.schedule_lession_edit');
    }

    public function scheduleLessionDetail()
    {
        return view('schedules.schedule_lession_detail');
    }

    public function scheduleLessionSubstitute()
    {
        return view('schedules.schedule_lession_substitute');
    }
}
