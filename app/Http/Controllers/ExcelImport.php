<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelImport extends Controller
{
    public function import(Request $request){
        Excel::import(new UsersImport,'users.xlsx');
    }
}
