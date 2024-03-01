<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\Guest\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::METODO(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)

Route::get('/', [PageController::class, 'index']);   // <--- Che vantaggi ho nominando le rotte?

Route::get('/chi-siamo', [PageController::class, 'about']);

