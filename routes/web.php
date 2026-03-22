<?php

use Illuminate\Support\Facades\Route;
use Spatie\LaravelPdf\Facades\Pdf;
use function Spatie\LaravelPdf\Support\pdf;

Route::get('/websites', function () {
    return pdf()->view('websites')->name('Prozizero - Maak je eigen website')->format('A4');
});
Route::get('/websites-html', function () {
    return view('websites');
});
