<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class baseNascorController extends Controller
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
        $title='Comandes';
        return view('User/baseNascor',compact('now','title')); 
    }
}
