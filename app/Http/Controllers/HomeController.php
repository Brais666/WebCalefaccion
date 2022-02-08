<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        return view('auth.login');
    }

    public function chartjs()
    {
        $viewer = View::select(DB::raw("SUM(numberofview) as count"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("year(created_at)"))
            ->get()->toArray();
        $viewer = array_column($viewer, 'count');

        $click = Click::select(DB::raw("SUM(numberofclick) as count"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("year(created_at)"))
            ->get()->toArray();
        $click = array_column($click, 'count');


        return view('primasChart')
            ->with('viewer', json_encode($viewer, JSON_NUMERIC_CHECK))
            ->with('click', json_encode($click, JSON_NUMERIC_CHECK));
    }

    /*public function comparar(Request $request)
    
     if ($request->get('poblacion')) {
           $poblacion = Ruta::where('poblacion', '=', Input::get('poblacion'))->first();
           $postal = Ruta::where('codigopost', '=', Input::get('poblacion'))->first();
            if ($poblacion === null) and ($postal === null) {
             return view
            }
        }
        else
        {
            $ofertas = Oferta::simplePaginate(10);
        }   
    }

    /*
    public function someAdminStuff(Request $request)
    {
        $request->user()->authorizeRoles(‘admin’);
        return view(‘some.view’);
    }*/
    
}
