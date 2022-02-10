<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\primas2;

class ChartController extends Controller
{
    public function index()
    {
        $primas = primas2::select(DB::raw("Count(ID_Terminal) as count"))
        ->orderBy('ID_Terminal','ASC')->get()->toArray();
        $primas = array_column($primas,'count');

        $logistica = primas2::select(DB::raw("Count(Logistica) as count"))
        ->orderBy('ID_Terminal','ASC')->get()->toArray();
        $logistica = array_column($logistica,'count');

        $dolar = primas2::select(DB::raw("Count(PrimaDolarTn) as count"))
        ->orderBy('ID_Terminal','ASC')->get()->toArray();
        $dolar = array_column($dolar,'count');
        
        return view('User/primasChartjs')
        ->with('primas', json_encode($primas, JSON_NUMERIC_CHECK))
        ->with('dolar', json_encode($dolar, JSON_NUMERIC_CHECK))
        ->with('logistica', json_encode($logistica, JSON_NUMERIC_CHECK));
            
            
    }
}