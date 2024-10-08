<?php

use App\Livewire\AboutUsPage;
use App\Livewire\Auth\ForgotPasswordPage;
use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\Auth\ResetPasswordPage;
use App\Livewire\CancelPage;
use App\Livewire\MenuPage;
use App\Livewire\ShopPage;
use App\Livewire\CartPage;
use App\Livewire\CheckoutPage;
use App\Livewire\ContactUsPage;
use App\Livewire\HomePage;
use App\Livewire\MyOrdersPage;
use App\Livewire\ProductDetailPage;
use App\Livewire\MyOrderDetailPage;
use App\Livewire\SuccessPage;
use Filament\Notifications\Auth\ResetPassword;
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

Route::get('/', HomePage::class);
Route::get('/menu', MenuPage::class);
Route::get('/shop', ShopPage::class);
Route::get('/cart', CartPage::class);
Route::get('/aboutUs', AboutUsPage::class);
Route::get('/contactUs', ContactUsPage::class);
Route::get('/products/{product}', ProductDetailPage::class);
Route::get('/checkout', CheckoutPage::class);
Route::get('/my-orders' , MyOrdersPage::class);
Route::get('/my-orders/{order}' , MyOrderDetailPage::class);

Route::get('/login' , LoginPage::class);
Route::get('/register' , RegisterPage::class);
Route::get('/forgot' , ForgotPasswordPage::class);
Route::get('/reset' , ResetPasswordPage::class);

Route::get('/success' ,SuccessPage::class);
Route::get('/cancel' ,CancelPage::class);
