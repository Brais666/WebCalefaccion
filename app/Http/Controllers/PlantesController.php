<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title='Plantes';
        return view('User/Nascor/plantes',compact('title'));
    }

   
}
