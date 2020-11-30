<?php

//oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

/* ADMIN ROUTES */
/* GET ROUTES */
Route::get('/', [AdminController::class, 'index'])->name('admin.index');

Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');

Route::get('/classes-details', [AdminController::class, 'classesDetails'])->name('admin.classes');

Route::get('/customer-details', [AdminController::class, 'customerDetails'])->name('admin.customers');

Route::get('/employee-details', [AdminController::class, 'employeeDetails'])->name('admin.employees');

Route::get('/entrylog-details', [AdminController::class, 'entrylogDetails'])->name('admin.entrylogs');

Route::get('/transaction-details', [AdminController::class, 'transactionDetails'])->name('admin.transactions');

Route::get('/shop-details', [AdminController::class, 'shopDetails'])->name('admin.shop');

Route::get('/login', [AdminController::class, 'login'])->name('admin.login');

Route::get('/register', [AdminController::class, 'register'])->name('admin.register');

Route::get('/new-transaction-page', [AdminController::class, 'showNewTransactionPage'])->name('add-new-transaction-page');

Route::get('/pdf-view-thequickbrownfoxjumpsoverthelazydogs', [AdminController::class, 'pdfView'])->name('pdf-view');

/* DELETE ROUTES */
Route::delete('/remove-employee', [AdminController::class, 'removeEmployee'])->name('remove-employee');
Route::delete('/remove-class-member', [AdminController::class, 'removeClassMember'])->name('remove-class-member');
Route::delete('/remove-class-entirely', [AdminController::class, 'removeClassEntirely'])->name('remove-class-entirely');
Route::delete('/remove-product', [AdminController::class, 'removeProduct'])->name('remove-product');
Route::delete('/remove-order', [AdminController::class, 'removeOrder'])->name('remove-order');
Route::delete('/remove-transaction', [AdminController::class, 'removeTransaction'])->name('remove-transaction');

/* POST ROUTES */
Route::post('/add-employee', [AdminController::class, 'addEmployee'])->name('add-employee');
Route::post('/add-customer', [AdminController::class, 'addCustomer'])->name('add-customer');
Route::post('/add-new-log', [AdminController::class, 'addNewLog'])->name('add-new-log');
Route::post('/add-new-class', [AdminController::class, 'addNewClass'])->name('add-new-class');
Route::post('/update-class', [AdminController::class, 'updateClass'])->name('update-class');
Route::post('/add-new-class-member', [AdminController::class, 'addNewClassMember'])->name('add-new-class-member');
Route::post('/add-new-product', [AdminController::class, 'addNewProduct'])->name('add-new-product');
Route::post('/update-product', [AdminController::class, 'updateProduct'])->name('update-product');
Route::post('/add-new-transaction', [AdminController::class, 'addNewTransaction'])->name('add-new-transaction');
Route::post('/add-new-order', [AdminController::class, 'addNewOrder'])->name('add-new-order');
Route::post('/finish-transaction', [AdminController::class, 'finishTransaction'])->name('finish-transaction');
Route::post('/generate-report', [AdminController::class, 'generateReport'])->name('generate-report');

