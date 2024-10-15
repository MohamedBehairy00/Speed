<?php


use App\Http\Controllers\contactUsController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\hireController;
use Illuminate\Support\Facades\Route;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // {{DashBoard}}
    Route::get('dashboard', [App\Http\Controllers\dashboardController::class, 'index'])->name('dashboard');
    Route::delete('dashboard/delete/{id}', [App\Http\Controllers\dashboardController::class, 'deleteClient']);
    Route::delete('dashboard/delete/employee/{id}', [App\Http\Controllers\dashboardController::class, 'deleteEmployee']);
    Route::get('/employee/{id}/download-cv', [CvController::class, 'downloadCv'])->name('employees.downloadCv');

});






Route::get('marketing', function () {
    return view('pages/marketing');
});
Route::get('branding', function () {
    return view('pages/branding');
});
Route::get('production', function () {
    return view('pages/production');
});
Route::get('technology', function () {
    return view('pages/technology');
});
Route::get('aboutus', function () {
    return view('pages/aboutus');
});


Route::get('/', [App\Http\Controllers\homeController::class, 'index'])->name('home.index');


// {{ContactUs }}
Route::get('/contactus', [contactUsController::class, 'index'])->name('contactus.index');
Route::post('create', [contactUsController::class, 'store'])->name('create.store');

// {{Hiring}}
Route::get('/hire', [hireController::class, 'index'])->name('hire.index');
Route::post('createhiring',[hireController::class, 'store'])->name('createhiring.store');




