<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/login', function () {
    if (Auth::check()) {
        return redirect()->route('home');
    }
    return view('auth.login');
})->name('login');

Route::post('login', [\App\Http\Controllers\LoginController::class, 'login']);


Route::get('register', function () {
    if (Auth::check()) {
        return redirect(route('home'));
    }
    return view('auth.register');
})->name('register');

Route::get('admin/clients', function () {
    return view('admin.clients');
});

Route::get('admin/debit', function () {
    return view('admin.debitpay');
});

Route::get('admin/departament', function () {
    return view('admin.departament');
});

Route::get('admin/departament_operation', function () {
    return view('admin.departament_operation');
});

Route::get('admin/sum_departament', function () {
    return view('admin.sum_departament');
});

Route::get('admin/departament-results', function () {
    return view('admin.departament-results');
});

Route::get('admin/reports', function () {
    return view('admin.reports_admin');
});


Route::post('create_product', [\App\Http\Controllers\CreateProduct_::class, 'product_validity']);

Route::post('create_clients', [\App\Http\Controllers\CreateProduct_::class, 'clients_validity']);

Route::get('admin', [\App\Http\Controllers\CreateProduct_::class, 'get_product']);

Route::get('admin', [\App\Http\Controllers\Clients::class, 'get_clients']);

Route::get('home', [\App\Http\Controllers\CreateProduct_::class, 'get_product']);

Route::post('sale', [\App\Http\Controllers\SaleController::class, 'create']);

Auth::routes(['verify' => true]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'get_product'])->name('home');
    Route::get('/plans', [\App\Http\Controllers\PlanController::class, 'index'])->name('plans.index');
    Route::get('/plan/{plan}', [\App\Http\Controllers\PlanController::class, 'show'])->name('plans.show');
    Route::post('/subscription', [\App\Http\Controllers\SubscriptionController::class, 'create'])->name('subscription.create');
});




Route::get('/login/{social}', '\App\Http\Controllers\Auth\LoginController@socialLogin')->where('social', 'twitter|facebook|linkedin|google|github|bitbucket');
Route::get('/login/{social}/callback', '\App\Http\Controllers\Auth\LoginController@handleProviderCallback')->where('social', 'twitter|facebook|linkedin|google|github|bitbucket');
Route::get('/home/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
