<?php

use GuzzleHttp\Client;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Exports\PedidosExport;
use App\Exports\PedidosCanceladosExport;
use Maatwebsite\Excel\Facades\Excel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
        return view('welcome');
        });

Route::get('/precios', function () {
        return view('precios');
        });

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/promociones', function () {
    return view('promociones');
});

//////FAQS//////
Route::get('/faq', function () {
    return view('faq');
});

Route::get('/faq1', function () {
    return view('faq1');
});
Route::get('/faq2', function () {
    return view('faq2');
});
Route::get('/faq3', function () {
    return view('faq3');
});

Route::get('/faq4', function () {
    return view('faq4');
});

/////////////////

Route::get('/financiacion', function () {
    return view('financiacion');
});

Route::get('/info', function () {
    return view('infocookies');
});

Route::get('/privacidad', function () {
    return view('privacidad');
});

Route::get('/terminos', function () {
    return view('terminos');
});

Route::get('/condiciones', function () {
    return view('condiciones');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/quienessomos', function () {
    return view('quienessomos');
});

Route::get('/singlepost/temporal', function () {

    return view('singlepost/temporal');

});

Route::get("financ", function(){
   return View::make("grisfinanc.financ");
});

Route::resource('welcome','RutaController');

Route::get('/welcome', function () {
    return view('welcome');
});
    

    Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('loginAdmin');
    Route::get('/login', 'Auth\LoginController@showUserLoginForm');
    Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
    Route::get('/register', 'Auth\RegisterController@showUserRegisterForm');

    Route::post('/login/admin', 'Auth\LoginController@adminLogin');
    Route::post('/login', 'Auth\LoginController@writerLogin');
    Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
    Route::post('/register', 'Auth\RegisterController@createWriter');

    Route::view('/Admin', 'admin');


Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

/*Route::group(['middleware' => ['web','auth']],function(){

        Route::get('/bienvenido',function(){
            if (Auth::user()->admin == 0){

                return view('Admin.User.home');
             }
            else if(Auth::user()->admin == 1)
            {
                return view('Catalunya.home');
            }
            else if(Auth::user()->admin == 2)
            {
                return view('Madrid.home');
            }
            else if(Auth::user()->admin == 3)
            {
                return view('Valencia.home');
            }
            else if(Auth::user()->admin == 4)
            {
                return view('CatMad.home');
            }
            else
            {
                return view('User.home');
            }
        });

        Route::resource('productos','ProductoController');

        Route::resource('ofertas','OfertaController');

        Route::resource('clientes','Cliente2Controller');

        Route::resource('tarifas','TarifaController');

        Route::resource('pedidos','PedidoController');

        Route::resource('rutas','RutaController');

        Route::resource('gestores','GestoresController');

        Route::get('csv', 'TaskController@exportCsv');

        Route::get('slide', 'OfertaController@slide');

        Route::get('/excel', function () {
            return Excel::download(new PedidosExport, 'pedidos.csv');
        });
        Route::get('/excelcan', function () {
            return Excel::download(new PedidosCanceladosExport, 'pedidosnopendientes.csv');
        });

        
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/


//////////////////

Route::resource('/student','StudentController');

//Route::get('/bienvenido2', 'RutaController@index');

Route::resource('/bienvenido2', 'RutaController');

Route::resource('/bienvenido', 'RutaController');

//Route::post('/bienvenido2', 'MailController@send');

//Route::post('/bienvenido', 'MailController@send');

Auth::routes();

//Route::get('/home', 'HomeController@index');



///////////////rutas user///////////////

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');


////////////////////////////////////

//////////////////// rutas cliente ///////////////

Route::get('actualizarcli/{id}','ClienteController@edit')->name('cliente.edit');

Route::post('actualizarcli/{id}', 'ClienteController@update')->name('cliente.update');

Route::get('pedidos/{id}','PedidosController@index')->name('cliente.pedidos');

Route::resource('consulta','NorutaController');

Route::resource('consulta2','CasirutaController');

Route::group(['middleware' => ['web','auth']],function(){



       Route::get('/welcome',function(){
            if (Auth::user()->admin == 0){
                return view('Admin.User.home');
             }
             else if (Auth::user()->admin == 1){
                return view('Admin.Catalunya.home');
             }
             else{
                return view('welcome');
             }
            
        });

        Route::get('/bienvenido', function () {
            return view('poblacion.bienvenido2');
        });

        //Route::get('/cuenta/{id}', 'UserController')->name('cuenta');

        Route::get('cuenta', function () {
            return view('User.cuenta');
        });

        // Email related routes
       Route::get('bienvenido3', 'MailController@send');

        //Route::resource('cuenta', 'UserController');

       Route::resource('pedidos','PedidosController');

       Route::resource('pedidofinanciado','PedidosController');

       Route::resource('pedidos2','PedidosController');
       
        Route::get('User.cuenta','UserController@update');

       Route::get('pedidos.view', 'PedidosController@show');

       Route::get('pedidofinanciado.view', 'PedidosController@show');

       Route::get('pedidos.view2', 'PedidosController@cuenta');

       Route::resource('pedidosa','PedidosController');  

       Route::get('pedidos.unclick', 'PedidosController@click');

       Route::get('pedidos.pedidosunclick', 'PedidosController@unclick');

       
       
       Route::resource('tarifas','TarifaController');
});

Auth::routes();
