<?php

use App\Http\Controllers\Admin\ItemsController;
use App\Http\Controllers\Admin\LostItemController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\AduanController;
use App\Models\Aduan;
use App\Models\Barang;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

// return abort(404);

Route::get('/', function () {
    return view('public.index');
})->name('public');


Route::get('/dashboard', function (Request $request) {

    $id = $request->user()->id;

    $aduans =  DB::table('aduans')->where('user_id', $id)->get();

    return view('users.dashboard', [
        'user' => $request->user(),
        'aduans' => $aduans
    ]);
})->middleware(['auth', 'verified', 'checkRole:user,admin'])->name('dashboard.user');


Route::get('/aduan', [AduanController::class, 'index'])->name('aduan');
Route::get('/detail-aduan/{id}', [AduanController::class, 'show'])->name('detailaduan');


Route::post('/claimaduan', [AduanController::class, 'claim'])->middleware(['auth', 'verified', 'checkRole:user,admin'])->name('claimaduan');
Route::post('/postclaim', [AduanController::class, 'postclaim'])->middleware(['auth', 'verified', 'checkRole:user,admin'])->name('postclaim');
Route::get('/postclaimdetail/{id}', [AduanController::class, 'postclaimdetail'])->middleware(['auth', 'verified', 'checkRole:user,admin'])->name('postclaimdetail');
Route::get('/bikin-aduan', [AduanController::class, 'create'])->middleware(['auth', 'verified', 'checkRole:user,admin'])->name('bikinaduan');
Route::post('/bikin-aduan', [AduanController::class, 'store'])->name('bikinaduan');

Route::middleware(['auth', 'checkRole:user,admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->middleware(['auth', 'verified', 'checkRole:user,admin'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->middleware(['auth', 'verified', 'checkRole:user,admin'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->middleware(['auth', 'verified', 'checkRole:user,admin'])->name('profile.destroy');
});



// admin




Route::get('admin/dashboard', function (Request $request) {
    $lostitem = Aduan::where("status", 1)->count();
    $founditem = Barang::all();
    $totalitem =  Barang::all()->count();
    $aduan =  Aduan::where("status", 1)->get();
    // dd(Auth::user()->role);
    return view('admin.dashboard', [
        'user' => $request->user(),
        'lostitem' => $lostitem,
        'founditem' => $founditem,
        'totalitem' => $totalitem,
        'aduan' => $aduan,

    ]);
})->middleware(['auth', 'verified', 'checkRole:admin'])->name('dashboard');


Route::get('/admin/items', [itemsController::class, 'index'])->name('items');
Route::get('/admin/tambah-items', [itemsController::class, 'create'])->name('tambahitems');
Route::post('/admin/tambah-items', [itemsController::class, 'store'])->name('tambahitems');
Route::get('/admin/item/d/{id?}', [itemsController::class, 'edit'])->name('edit-item');
Route::put('/admin/item/edit/{id?}', [itemsController::class, 'update'])->name('editItems');



Route::get('/admin/lostitems', [LostItemController::class, 'index'])->name('lostitems');
Route::get('/admin/lostitems/d/{id?}', [LostItemController::class, 'show'])->name('detaillostitems');
Route::put('/admin/lostitems/konfirmasi', [LostItemController::class, 'update'])->name('konfirmasi-aduan');
Route::put('/admin/lostitems/cancel', [LostItemController::class, 'destroy'])->name('tolak-aduan');


Route::get('/auth/{provider}', [SocialiteController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProvideCallback']);
require __DIR__ . '/auth.php';
