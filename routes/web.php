<?php

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginAuth;
use App\Http\Controllers\Admin;
use App\Http\Controllers\userprofile;
use App\Http\Controllers\AddCustomer;
use App\Http\Controllers\CustomerView;
use App\Http\Controllers\EditCustomer;
use App\Http\Controllers\CreateInvoice;
use App\Http\Controllers\CreateCustomerInvoice;
use App\Http\Controllers\PurchaseBill;
use App\Http\Controllers\Vendors;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


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
    return view('login-customer');
})->name('login');

Route::get('/dashboard', [LoginAuth::class, 'showDashboard'])
    ->middleware('auth', 'verified')
    ->name('dashboard');

Auth::routes([
    'verify' => true
]);

Route::post('/login-customer-check', [LoginAuth::class, "loginCustomerCheck"])->name('logincheck');
Route::post('/signin-admin-check', [LoginAuth::class, "signinAdminCheck"])->name('admin-login-check');
Route::post('/signup-customer-check', [LoginAuth::class, "signupCustomerCheck"])->name('signup.customer.check');
Route::view('/signin-admin', 'signin-admin')->name('admin-login');
Route::get('/signup-customer', [LoginAuth::class, "singupPage"])->name('signup.customer');
Route::get('/sign-out', [LoginAuth::class, "signOut"])->name('logout');

Route::group(['middleware' => 'auth', 'revalidate'], function () {
    Route::get('/profile', [userprofile::class, "profile"])->name('profile');
    Route::get('/edit-profile', [LoginAuth::class, "editprofile"]);
    Route::post('/edit-profile-submit', [LoginAuth::class, "editprofilesubmit"])->name('edit-profile-submit');
    Route::get('settings', [LoginAuth::class, "accountSetting"])->name('settings');
    Route::get('/admin-customer-details', [Admin::class, "customerView"])->name('companies');
    Route::get('/delete-customer-admin{id}', [Admin::class], 'deleteCustomerAdmin')->name('delete-customer-admin');
    // Route::view('/admin-customer-page', 'admin-customer-page');
    Route::get('/add-customer', [AddCustomer::class, "AddCustomer"])->name('add-customer');
    Route::post('/add-customer', [AddCustomer::class, "AddCustomerSubmit"])->name('add.customer.submit');
    // Route::view('/CustomerView','CustomerView');
    Route::get('/CustomerView', [CustomerView::class, "CustomerViewData"])->name('CustomerView');
    Route::get('/CustomerView/delete/{id}', [CustomerView::class, 'delete'])->name('delete-customer');
    Route::get('/edit-customer{id}', [EditCustomer::class, 'edit']);
    Route::post('/edit-customer{id}', [EditCustomer::class, 'EditCustomer']);
    Route::get('/create-invoice', [CreateInvoice::class, 'CreateInvoice'])->name('add-invoice');
    Route::post('/create-invoice-submit', [CreateInvoice::class, 'CreateInvoiceSubmit'])->name('create.invoice.submit');

    Route::get('/ViewAdminInvoice', [CreateCustomerInvoice::class, 'ViewAdminInvoice']);
    Route::get('/ViewCompanyCustomers{id}', [CustomerView::class, 'adminCustomerView'])->name('adminCustomerView');
    Route::get('/ViewCompanyVendors{id}', [Vendors::class, 'adminViewVendor'])->name('adminViewVendor');
    Route::post('/ViewAdminInvoiceSubmit', [CreateCustomerInvoice::class, 'ViewAdminInvoiceSubmit']);
    Route::get('/ViewAdminPurchaseBill', [PurchaseBill::class, 'ViewAdminPurchaseBill']);
    Route::post('/ViewAdminPurchaseBillSubmit', [PurchaseBill::class, 'ViewAdminPurchaseBillSubmit']);

    Route::get('/CreateCustomerInvoice{id}', [CreateCustomerInvoice::class, 'CreateCustomerInvoices']);
    Route::Post('/CreateCustomerInvoice{id}', [CreateCustomerInvoice::class, 'CreateCustomerInvoicesSubmit']);
    Route::get('/AddVendors', [Vendors::class, 'AddVendors'])->name('add-vendor');
    Route::post('/SubmitVendors', [Vendors::class, 'AddVendorSubmit'])->name('submit-vendor');
    Route::get('/ViewVendors', [Vendors::class, 'ViewVendor'])->name('viewVendor');
    Route::get('/ViewVendors/delete{id}', [Vendors::class, 'delete'])->name('delete-vendor');
    Route::get('/EditVendor{id}', [Vendors::class, 'edit'])->name('edit-vendor');
    Route::post('/EditVendor{id}', [Vendors::class, 'EditVendor'])->name('update-vendor');
    Route::get('/PurchaseBill', [PurchaseBill::class, 'Bill'])->name('purchases');
    Route::post('/PurchaseBill', [PurchaseBill::class, 'PurchaseBillSubmit']);
    Route::get('/CreatePurchaseBill{id}', [PurchaseBill::class, 'CretePurchaseBill']);
    Route::post('/CreatePurchaseBill{id}', [PurchaseBill::class, 'CreatePurchaseBillSubmit']);

    Route::get('/ViewInvoice', [CreateInvoice::class, 'ViewInvoice'])->name('invoice');
    Route::get('/ViewInvoice/delete{id}', [CreateInvoice::class, 'delete'])->name('delete-invoice');
    Route::get('/ViewPurchaseBill{id}', [PurchaseBill::class, 'ViewPurchaseBill']);
    Route::get('/ViewPurchaseBill/delete{id}', [PurchaseBill::class, 'delete'])->name('delete-purchase');
    Route::get('/CustomerView{id}', [CustomerView::class, "AdminCustomerViewData"]);
    Route::get('/ViewVendor{id}', [Vendors::class, "AdminViewVendor"]);
});

Route::get('/email/verify', function () {
    return view('verify');
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect()->route('dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/forgot-password', function () {
    return view('password_reset');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password{token}', function (string $token) {
    return view('reset-password-submit', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');
