<?php

namespace App\Http\Controllers\Recruit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Work;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $companies = Company::all();
        $works = Work::paginate(6);
        
        return view('recruit.index')
        ->with('companies' , $companies)
        ->with('works' , $works);
    }
}
