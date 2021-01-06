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
use App\Http\Controllers\ContactenosController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\ChartJsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('quienes-somos', function () {
    return view('quienes_somos.index', ['current' => 1]);
});

Route::get('noticias', function () {
    return view('noticias.index', ['current' => 2]);
});

Route::get('noticias/detalle', function () {
    return view('noticias.detalle', ['current' => 2]);
});

// Route::get('contactenos', function () {
//     return view('contactenos.index', ['current' => 3]);
// });
Route::get('/contactenos', [ContactenosController::class, 'index']);

Route::post('/contactenos/send', [ContactenosController::class, 'send']);

Route::get('/pdf/descargar', [PdfController::class, 'download']);

Route::get('exportar', [ExcelController::class, 'exportar']);

Route::get('/grafico', [ChartJsController::class, 'index']);