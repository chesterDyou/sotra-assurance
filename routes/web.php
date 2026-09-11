 <?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::resource('clients', ClientController::class);
});

require __DIR__.'/settings.php';