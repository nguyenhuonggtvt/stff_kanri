<?php

namespace App\Repositories;

use App\Models\Employee;

class EmployeeRepository
{
    /*
    **  Search for show list user
    **  Return result with permission & pagination
    */
    public function getAllData()
    {
        $data = Employee::all();
        return $data;
    }
}
