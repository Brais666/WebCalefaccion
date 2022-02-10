<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class CarreguesController extends Controller
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
        $title='Cargas';
        return view('User/Nascor/carregues',compact('now','title')); 
    }
}
