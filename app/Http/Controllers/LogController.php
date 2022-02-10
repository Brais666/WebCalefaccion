<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

class LogController extends Controller
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
        //$archivo = file_get_contents('C:\Users\brais\Desktop\Logs\_PCILOG_20200407.log');
        $files = Request::file("image");
        $archivo = file("C:\Users\brais\Desktop\Logs\_PCILOG_20200407.log", FILE_IGNORE_NEW_LINES); 
        $title='Search Log';
       
      
        return view('User/log',compact('now','title','archivo','files')); 
    }


   public function showUploadFile(Request $request) {

      $files = Request::file("image");
      $name = Request::input("Nombre");
      $now= Carbon::now();
      $title='Search Log';
       dd($name);
       return view('User/log',compact('now','title','files')); 
   }
}
