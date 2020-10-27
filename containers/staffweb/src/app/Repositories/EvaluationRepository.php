<?php

namespace App\Repositories;

use App\Models\Evaluation;

class EvaluationRepository
{
    /*
    **  Search for show list evaluations
    **  Return results with pagination
    */
    public function searchByArray($aryParams = [])
    {
        $query = $this->buildQuery($aryParams);

        $perPage = isset($aryParams['perPage']) ? $aryParams['perPage'] : -1;

        return $query->paginate($perPage);
    }

    /*
    **  Build common query
    **  Return query builder
    */
    public function buildQuery($aryParams = [])
    {
        $query = Evaluation::where('status', 0);

        $aryCondition = $this->buildSearchCondition($aryParams);
        $aryConfig = $this->buildGetSearchConfig($aryParams);

        foreach ($aryCondition as $column => $value) {
            if ($column == 'searchKeyWord') {
                $value = strtolower($value);
                $query = $query->whereRaw('lower(teacher_id) like ? OR lower(observer_id) like ?', ["%{$value}%", "%{$value}%"]);
            } else {
                $query = $query->where($column, $value);
            }
        }
        // Order by
        foreach ($aryConfig['orderby'] as $field => $sortValue) {
            $query = $query->orderBy($field, $sortValue);
        }
        $query = $query->orderBy('created', 'desc');

        return $query;
    }

    /*
    **  Build query condition for search
    */
    public function buildSearchCondition($aryParams = [])
    {
        if (empty($aryParams)) {
            return [];
        }

        $aryCondition = [];
        if (isset($aryParams['searchKeyWord'])) {
            $aryCondition['searchKeyWord'] = $aryParams['searchKeyWord'];
        }

        return $aryCondition;
    }

    /*
    **  Build query config for search
    */
    public function buildGetSearchConfig($aryParams = [])
    {
        $aryConfig = [];

        $paramOrderBy = isset($aryParams['orderby']) ? $aryParams['orderby'] : [];
        $orderBy = [];
        foreach ($paramOrderBy as $field => $sortValue) {
            if ($sortValue == '') break;
            switch ($field) {
                // case 'fullname':
                //     $orderBy['first_name'] = $sortValue;
                //     $orderBy['last_name'] = $sortValue;
                //     break;
                default:
                    $orderBy[$field] = $sortValue;
                    break;
            }
        }
        $aryConfig['orderby'] = $orderBy;

        return $aryConfig;
    }
}
