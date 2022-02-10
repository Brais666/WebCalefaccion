<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FichajesrrhhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title='Fichajes';
        return view('RRHH/fichajesrrh',compact('title'));
    }

   
}
