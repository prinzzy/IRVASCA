<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\Admin\AdminEmailController;
use App\Models\Product;

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


Route::prefix('admin')->middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::get('products', [AdminProductController::class, 'index'])->name('products.index');
    Route::post('products', [AdminProductController::class, 'store'])->name('products.store');
    Route::get('products/{product}', [AdminProductController::class, 'show'])->name('products.show');
    Route::put('products/{product}', [AdminProductController::class, 'update'])->name('products.update');
    Route::delete('products/{product}', [AdminProductController::class, 'destroy'])->name('products.destroy');

    Route::get('emails', [AdminEmailController::class, 'index'])->name('admin.emails.index');
    Route::get('admin/emails/statsByMonth', [AdminEmailController::class, 'getEmailStatsByMonth'])->name('admin.emails.statsByMonth');
    Route::get('admin/emails/counts-by-day', [AdminEmailController::class, 'countsByDay'])->name('admin.emails.countsByDay');
});



Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');


Route::get('subcategories', [SubcategoryController::class, 'index'])->name('subcategories.index');
Route::get('subcategories/create', [SubcategoryController::class, 'create'])->name('subcategories.create');
Route::post('subcategories', [SubcategoryController::class, 'store'])->name('subcategories.store');
Route::get('subcategories/{subcategory}/edit', [SubcategoryController::class, 'edit'])->name('subcategories.edit');
Route::put('subcategories/{subcategory}', [SubcategoryController::class, 'update'])->name('subcategories.update');
Route::delete('subcategories/{subcategory}', [SubcategoryController::class, 'destroy'])->name('subcategories.destroy');






Route::get('/', function () {
    $products = Product::all(); // Fetch all products
    return view('countdown', compact('products'));
})->name('countdown');

Route::get('/index', function () {
    return view('index');
})->name('index');


Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::group(['prefix' => 'components', 'as' => 'components.'], function () {
        Route::get('/alert', function () {
            return view('admin.component.alert');
        })->name('alert');
        Route::get('/accordion', function () {
            return view('admin.component.accordion');
        })->name('accordion');
    });
});

// Countdown
Route::get('/countdown', function () {
    $products = Product::all(); // Fetch all products
    return view('countdown', compact('products'));
});

// Subcribed Email
Route::post('/emails', [EmailController::class, 'store'])->name('emails.store');
Route::get('/emails', [EmailController::class, 'index'])->name('emails.index');

Route::post('admin/emails/import', [AdminEmailController::class, 'importEmails'])->name('admin.emails.import');


Route::get('/catalog', [ProductController::class, 'index'])->name('catalog.index');
