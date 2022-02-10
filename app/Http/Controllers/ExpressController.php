<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ExpressController extends Controller
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
        $title='Transferencias Express';
        return view('User/Nascor/express',compact('now','title')); 
    }
}
