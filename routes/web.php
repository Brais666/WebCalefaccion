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


Route::get("financ", function () {
    return View::make("grisfinanc.financ");
});

Route::get('/bienvenido', [RutaController::class, 'index']);

Route::get('pedidos.view', 'PedidosController@show');

Route::resource('pedido', 'PedidosController');
// Resources
// Route::resource('consulta', 'NorutaController');
// Route::resource('consulta2', 'CasirutaController');

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
    // Route::post('pedido', 'PedidosController@');
    // Route::post('pedido.store', 'PedidosController@store');
    Route::get('User.cuenta', 'UserController@update');
});

