<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
class CompanyController extends Controller
{
    public function getCompnayList()
    {
        $company=Company::paginate(15);
        return view('company.index')->with('company',$company);
    }
}
