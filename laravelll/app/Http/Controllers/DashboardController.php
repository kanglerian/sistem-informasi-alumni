<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\HistoryAlumni;
use App\Models\Models\Students;
use App\Models\Models\Company;

class DashboardController extends Controller
{
    public function index(){

        $company = Company::all()->count();
        $diterima = HistoryAlumni::where('status','Diterima')->count();
        $pending = HistoryAlumni::where('status','Pending')->count();
        $gagal = HistoryAlumni::where('status','Gagal')->count();
        $dataHistory = HistoryAlumni::all()->count();

        $persentase = null;
        if($dataHistory == 0){
            $persentase = 0;
        }else{
            $diterima / $dataHistory * 100.2;
        }
        
        return view('pages.dashboard')->with([
            'company' => $company,
            'diterima' => $diterima,
            'pending' => $pending,
            'persentase' => $persentase
        ]);
    }
}
