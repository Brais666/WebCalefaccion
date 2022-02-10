<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class CoberturesController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $now= Carbon::now();
        $title='Coberturas';
        return view('User/Nascor/cobertures',compact('now','title')); 
    }
}
