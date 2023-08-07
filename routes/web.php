<?php

use App\Http\Controllers\admDelController;
use App\Http\Controllers\admProdDelController;
use App\Http\Controllers\admProdInsertController;
use App\Http\Controllers\admProdUpdateController;
use App\Http\Controllers\admRequestsController;
use App\Http\Controllers\calcController;
use App\Http\Controllers\calculatorViewController;
use App\Http\Controllers\cartDeleteController;
use App\Http\Controllers\cartShowController;
use App\Http\Controllers\cartTransitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\redactController;
use App\Http\Controllers\redUpdController;
use App\Http\Controllers\requestAcceptController;
use App\Http\Controllers\requestCancelController;
use App\Http\Controllers\requestsViewController;
use App\Http\Controllers\reqUpdController;
use App\Http\Controllers\sellsController;
use App\Http\Controllers\statusUpdController;
use App\Http\Controllers\updController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\userInterController;
use Illuminate\Routing\ViewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\shopDisplayController;
use App\Http\Controllers\filterController;
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
})->name('main');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/shop', [shopDisplayController::class, 'shopDisplay'])->name('shop');

Route::post('/filter',[filterController::class, 'filterConfirm'])->name('filter');

Route::get('/cartTransit',[cartTransitController::class, 'test'])->name('cartTransit');

Route::get('/cart', [cartShowController::class, 'cartShow'])->name('cart');

Route::get('cartDelete', [cartDeleteController::class, 'cartDelete'])->name('cartDelete');



//выход из акаунта
Route::get('/logout', [ProfileController::class, 'destroy'])->name('logout');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('adminPanel', [userInterController::class, 'roleViewer'])->name('adminPanel');

Route::get('adminPanel/delete',[admProdDelController::class, 'index'])->name('delete');

Route::get('adminPanel/update',[admProdUpdateController::class, 'index'])->name('update');

Route::get('adminPanel/insert',[admProdInsertController::class, 'index'])->name('insert');

Route::get('/uploadFile', [uploadController::class, 'index'])->name('uploadFile');

Route::get('deleteProd', [admDelController::class, 'index'])->name('deleteProd');

Route::get('redact', [redactController::class, 'index'])->name('redact');

Route::get('upd', [redUpdController::class, 'index'])->name('upd');

Route::get('redUpd', [redUpdController::class, 'index'])->name('redUpd');

Route::get('calculator', [calculatorViewController::class, 'calcView'])->name('calculator');

Route::get('calcV', [calcController::class, 'calcV'])->name('calcV');

Route::get('requestAccept', [requestAcceptController::class, 'index'])->name('reqAccept');

Route::get('requestInsert', [requestAcceptController::class, 'insert'])->name('reqInsert');

Route::get('success', function () {
    return view('success');
})->name('success');

Route::get('myRequests',  [requestsViewController::class, 'index'])->name('myRequests');

Route::get('admRequests', [admRequestsController::class, 'index'])->name('admRequests');

Route::get('updateStatus', [statusUpdController::class, 'obnov'])->name('updateStatus');

Route::get('sells',[sellsController::class, 'sells'])->name('sells');

Route::get('cancelReq',[requestCancelController::class, 'cancelReq'])->name('cancelReq');

Route::get('reqUpd', [reqUpdController::class, 'reqUpd'])->name('reqUpd');
