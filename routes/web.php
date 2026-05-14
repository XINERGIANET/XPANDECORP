<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\XpandeController;
use App\Http\Controllers\ConsultoriaController;
use App\Http\Controllers\XinergiaController;

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

Route::get('/', [XpandeController::class, 'index'])->name('index');

Route::prefix('consultoria')->group(function(){
	Route::get('/', [ConsultoriaController::class, 'index'])->name('consultoria.index');
	Route::get('nosotros', [ConsultoriaController::class, 'nosotros'])->name('consultoria.nosotros');
	Route::get('servicios/productividad-y-procesos', [ConsultoriaController::class, 'productividad'])->name('consultoria.productividad');
	Route::get('servicios/higiene-e-inocuidad-alimentaria', [ConsultoriaController::class, 'higiene'])->name('consultoria.higiene');
	Route::get('servicios/seguridad-y-salud-en-el-trabajo', [ConsultoriaController::class, 'seguridad'])->name('consultoria.seguridad');
	Route::get('servicios/ecosistema-de-negocios', [ConsultoriaController::class, 'ecosistema'])->name('consultoria.ecosistema');
});

Route::prefix('xinergia')->group(function(){
	Route::get('/', [XinergiaController::class, 'index'])->name('xinergia.index');
});
