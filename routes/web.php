<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\Admin\AdminEmailController;
use App\Models\Product;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Auth\CustomCreateNewUser;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\PaymentCallbackController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\OrderController;



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

// Redirect Login
Route::get('/redirect', [RedirectController::class, 'handleRedirect'])->name('redirect');
// Route::get('/home', [HomeController::class, 'index'])->name('home');

// ADMIN ONLY
Route::group(['middleware' => ['auth:sanctum', 'admin']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/alert', function () {
        return view('admin.component.alert');
    })->name('alert');
    Route::get('/accordion', function () {
        return view('admin.component.accordion');
    })->name('accordion');
    // Route::get('products', [AdminProductController::class, 'index'])->name('products.index');
    // Route::post('products', [AdminProductController::class, 'store'])->name('products.store');

    // Route::put('products/{product}', [AdminProductController::class, 'update'])->name('products.update');
    // Route::delete('products/{product}', [AdminProductController::class, 'destroy'])->name('products.destroy');

    // Route::get('emails', [AdminEmailController::class, 'index'])->name('admin.emails.index');
    // Route::get('admin/emails/statsByMonth', [AdminEmailController::class, 'getEmailStatsByMonth'])->name('admin.emails.statsByMonth');
    // Route::get('admin/emails/counts-by-day', [AdminEmailController::class, 'countsByDay'])->name('admin.emails.countsByDay');
    // Route::get('/admin/emails/data', [AdminEmailController::class, 'getEmailData'])->name('admin.emails.data');
    // Route::post('admin/emails/import', [AdminEmailController::class, 'importEmails'])->name('admin.emails.import');

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
});


//PREFIX AWALAN ADMIN
Route::prefix('admin')->middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::get('products', [AdminProductController::class, 'index'])->name('products.index');
    Route::post('products', [AdminProductController::class, 'store'])->name('products.store');
    Route::get('products/{product}', [AdminProductController::class, 'show'])->name('products.show');
    Route::put('products/{product}', [AdminProductController::class, 'update'])->name('products.update');
    Route::delete('products/{product}', [AdminProductController::class, 'destroy'])->name('products.destroy');

    Route::get('emails', [AdminEmailController::class, 'index'])->name('admin.emails.index');
    Route::get('admin/emails/statsByMonth', [AdminEmailController::class, 'getEmailStatsByMonth'])->name('admin.emails.statsByMonth');
    Route::get('admin/emails/counts-by-day', [AdminEmailController::class, 'countsByDay'])->name('admin.emails.countsByDay');
    Route::get('/admin/emails/data', [AdminEmailController::class, 'getEmailData'])->name('admin.emails.data');
    Route::post('admin/emails/import', [AdminEmailController::class, 'importEmails'])->name('admin.emails.import');

    // Discount routes
    Route::get('discounts', [DiscountController::class, 'index'])->name('discounts.index'); // List all discounts
    Route::post('discounts', [DiscountController::class, 'store'])->name('discounts.store'); // Store new discount
    Route::put('discounts/{discount}', [DiscountController::class, 'update'])->name('discounts.update'); // Update discount
    Route::delete('discounts/{discount}', [DiscountController::class, 'destroy'])->name('discounts.destroy'); // Delete discount

    Route::get('transactions', [TransactionController::class, 'index'])->name('transactions.index');
    Route::get('transactions/{id}', [TransactionController::class, 'show'])->name('transactions.show');
    Route::delete('transactions/{id}', [TransactionController::class, 'destroy'])->name('transactions.destroy');


    Route::get('/orders', [OrderController::class, 'index'])->name('admin.orders.index');
    Route::post('/orders/{order}/update', [OrderController::class, 'updateStatus'])->name('admin.orders.updateStatus');
});



// HOMEPAGE
Route::get('/login-member', function () {
    return view('home.07_login_register');
});
Route::get('/register-member', function () {
    return view('home.05_register');
});




Route::middleware(['guest'])->group(function () {
    Route::post('/request-otp', [CustomCreateNewUser::class, 'requestOtp']);
    Route::post('/verify-otp', [CustomCreateNewUser::class, 'verifyOtp']);
    Route::post('/register', [CustomCreateNewUser::class, 'create']);
});





Route::get('/catalog', [IndexController::class, 'catalogProduct']);
Route::get('/single-product', function () {
    return view('home.04_single_product'); // home/single_product.blade.php
});
Route::get('/single-product-2', function () {
    return view('home.04_single_product-2'); // home/single_product_2.blade.php
});
Route::get('/shopping-cart', function () {
    return view('home.06_shopping_cart'); // home/shopping_cart.blade.php
});
Route::get('/ctg', function () {
    return view('home.02_categories');
});
Route::get('/single-product-2', function () {
    return view('home.04_single_product-2'); // home/single_product_2.blade.php
});
Route::get('/about', function () {
    return view('home.about'); // home/shopping_cart.blade.php
});
Route::get('/lookbook', function () {
    return view('home.look-book');
});
Route::get('/blog', function () {
    return view('home.12_blog');
});
Route::get('/shortcodes', function () {
    return view('home.shortcodes');
});

Route::get('/contact', function () {
    return view('home.14_contact');
});

Route::get('/shipping-member', function () {
    return view('home.08_Shipping_Address');
});
Route::get('/payment-member', function () {
    return view('home.09_payment');
});

Route::get('/summary-member', function () {
    return view('home.10_summary');
});

Route::get('/finish-member', function () {
    return view('home.11_finish');
});

Route::get('/privacy-policy', function () {
    return view('home.privacy_policy');
});


Route::get('/products/{id}', [IndexController::class, 'showProduct'])->name('product.show');

// CART
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');


// CHECK AUTH
Route::get('/check-auth', function () {
    return response()->json(['isAuthenticated' => auth()->check()]);
});


Route::get('/address-modal-data', [AddressController::class, 'showAddressModal'])->name('showAddressModal');
Route::post('/store-address', [AddressController::class, 'storeAddress'])->name('address.store');

Route::post('/checkout/set-selected-address', [CheckoutController::class, 'setSelectedAddress']);
Route::get('/checkout', [CheckoutController::class, 'showCheckout']);
Route::post('/apply-discount', [CheckoutController::class, 'applyDiscount'])->name('apply.discount');
Route::post('/checkout/process', [CheckoutController::class, 'checkoutProcess'])->name('checkout.process');

// CallBack
Route::post('/winpay/callback', [PaymentCallbackController::class, 'handleCallback']);





Route::get('/', function () {
    $products = Product::all(); // Fetch all products
    return view('countdown', compact('products'));
})->name('countdown');

Route::get('/shop', [IndexController::class, 'index'])->name('shop');




// Countdown
Route::get('/countdown', function () {
    $products = Product::all(); // Fetch all products
    return view('countdown', compact('products'));
});

// Subcribed Email
Route::post('/emails', [EmailController::class, 'store'])->name('emails.store');
Route::get('/emails', [EmailController::class, 'index'])->name('emails.index');
