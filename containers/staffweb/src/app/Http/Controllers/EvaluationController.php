<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use App\Repositories\EvaluationRepository;
use App\Repositories\EmployeeRepository;

class EvaluationController extends Controller
{
    private $evaluationRepository;
    private $employeeRepository;

    public function __construct(EvaluationRepository $evaluationRepository, EmployeeRepository $employeeRepository)
    {
        $this->evaluationRepository = $evaluationRepository;
        $this->employeeRepository = $employeeRepository;
    }

    public function evaluationSearch()
    {
        $aryEmployee = $this->employeeRepository->getAllData();
        return view('evaluations.evaluation_search', ['aryEmployee' => $aryEmployee]);
    }

    public function evaluationInput()
    {
        return view('evaluations.evaluation_input');
    }

    public function evaluationDetail($id)
    {
        return view('evaluations.evaluation_detail');
    }

    public function evaluationEdit()
    {
        return view('evaluations.evaluation_input');
    }

    public function searchListEvaluation(Request $request)
    {
        $aryParams = $request->post('params');
        $dataSearch = $this->evaluationRepository->searchByArray($aryParams);

        $aryRespon = [
            'dataSearch' => $dataSearch
        ];

        return response()->json($aryRespon, 200);
    }
}
