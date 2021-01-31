<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function create(){
        return view('admin.user.create');
    }

    public function store(Request $request){


        $this->validate($request,
            ['file'    =>'required|mimes:xls,xlsx'
            ]);

        $file = $request -> file('file');

        Excel::import(new UsersImport(),
            $file
        );

        return back()->with('success', 'All good!');
    }
}
