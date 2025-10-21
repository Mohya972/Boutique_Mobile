<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoutiqueController;

Route::get('/', [BoutiqueController::class, 'index'])->name('boutiques.index');
