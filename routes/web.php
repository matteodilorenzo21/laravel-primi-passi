<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $tipo = 'Erba - Veleno';
    $primaAbilita = 'Erbaiuto';
    $abilitaSpeciale = 'Clorofilla';
    $sesso = '87.5% ♂, 12.5% ♀';
    $altezza = '0,7 m';
    $peso = '6,9 kg';
    $tassoDiCattura = '45 (11.9%)';

    return view('home', compact('tipo', 'primaAbilita', 'abilitaSpeciale', 'sesso', 'altezza', 'peso', 'tassoDiCattura'));
});
