<?php

use GuzzleHttp\Client;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Exports\PedidosExport;
use App\Exports\PedidosCanceladosExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\RutaController;

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

Route::get("financ", function () {
    return View::make("grisfinanc.financ");
});

Route::get('/bienvenido', [RutaController::class, 'index']);
Route::get('pedidos', [PedidosController::class, 'index']);

Route::get('pedidos.view', 'PedidosController@show');

// Resources
Route::resource('pedidofinanciado', 'PedidosController');
Route::resource('consulta', 'NorutaController');
Route::resource('consulta2', 'CasirutaController');
Route::resource('pedidos', 'PedidosController');

Auth::routes();

Route::get('logout', function () {
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

Route::get('cuenta', function () {
            return view('User.cuenta');
});

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('User.cuenta', 'UserController@update');
});

// Route::resource('welcome', 'RutaController');

// Route::get('/welcome', function () {
//     return view('welcome');
// });


// Route::get('/login', 'Auth\LoginController@showUserLoginForm');
// Route::get('/register', 'Auth\RegisterController@showUserRegisterForm');

// Route::post('/login', 'Auth\LoginController@writerLogin');
// Route::post('/register', 'Auth\RegisterController@createWriter');

// Route::view('/Admin', 'admin');


// Route::get('logout', function () {
//     auth()->logout();
//     Session()->flush();

//     return Redirect::to('/');
// })->name('logout');

// Route::resource('/bienvenido', 'RutaController');

// Auth::routes();

// //Route::get('/home', 'HomeController@index');



// ///////////////rutas user///////////////




// ////////////////////////////////////

// //////////////////// rutas cliente ///////////////

// Route::get('actualizarcli/{id}', 'ClienteController@edit')->name('cliente.edit');

// Route::post('actualizarcli/{id}', 'ClienteController@update')->name('cliente.update');

// Route::get('pedidos/{id}', 'PedidosController@index')->name('cliente.pedidos');

// Route::resource('consulta2', 'CasirutaController');

// Route::group(['middleware' => ['web', 'auth']], function () {



//     Route::get('/welcome', function () {
//         if (Auth::user()->admin == 0) {
//             return view('Admin.User.home');
//         } else if (Auth::user()->admin == 1) {
//             return view('Admin.Catalunya.home');
//         } else {
//             return view('welcome');
//         }
//     });

//     Route::get('/bienvenido', function () {
//         return view('bienvenido');
//     });

//     //Route::get('/cuenta/{id}', 'UserController')->name('cuenta');

//     Route::get('cuenta', function () {
//         return view('User.cuenta');
//     });

//     // Email related routes
//     Route::get('bienvenido3', 'MailController@send');

//     //Route::resource('cuenta', 'UserController');

//     Route::resource('pedidos', 'PedidosController');



//     Route::resource('pedidos2', 'PedidosController');

//     Route::get('User.cuenta', 'UserController@update');

//     Route::get('pedidos.view', 'PedidosController@show');

//     Route::get('pedidofinanciado.view', 'PedidosController@show');

//     Route::get('pedidos.view2', 'PedidosController@cuenta');

//     Route::resource('pedidosa', 'PedidosController');

//     Route::get('pedidos.unclick', 'PedidosController@click');

//     Route::get('pedidos.pedidosunclick', 'PedidosController@unclick');



//     Route::resource('tarifas', 'TarifaController');
// });
