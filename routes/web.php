<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\FormController;
    use App\Http\Controllers\PsgcController;
    use App\Http\Controllers\CountryController;
   

    // Route to display the multi-step form
    Route::get('/', function () {return view('multi-step-form.form');});
    Route::get('/index', function () {return view('multi-step-form.index');});
    Route::get('/verification', function () {return view('multi-step-form.Accessverification');});
    Route::get('/thankyoupage', function () {return view('submission');});

    // Route to handle form submission (POST)
    Route::post('/form-submit', [FormController::class, 'submit'])->name('form.submit');

    // REST COUNTRIES Route 
    Route::get('/api/countries', [CountryController::class, 'index']);

    // PSGC Route
    Route::get('/psgc', [PsgcController::class, 'index']);