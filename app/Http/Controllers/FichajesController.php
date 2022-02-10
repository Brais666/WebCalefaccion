<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FichajesController extends Controller
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
        return view('Admin/fichajes',compact('title'));
    }

   
}
