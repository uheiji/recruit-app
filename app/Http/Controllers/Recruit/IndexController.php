<?php

namespace App\Http\Controllers\Recruit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $companies = Company::all();
        return view('recruit.index')
        ->with('companies' , $companies);
    }
}
