<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Product\productsDataController;

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

// Authentication & Public Routes
Route::get('/', [AdminController::class, 'adminlogin'])->name('login');
Route::get('/Admin/login', [AdminController::class, 'adminlogin'])->name('adminlogin');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

Auth::routes(['register' => false]);

// Protected Routes (Authenticated Users)
Route::middleware(['auth'])->group(function () {
    // Dashboard & Overview
    Route::get('/AdminDashboard', [AdminController::class, 'Dashboard'])->name('Dashboard');
    Route::get('/dashboardview', [AdminController::class, 'dashboardview'])->name('dashboardview');

    // Staff & Branch Management (Warehouse)
    Route::get('/RegisterStaff', [AdminController::class, 'RegisterStaff'])->name('RegisterStaff');
    Route::post('/newregistration', [AdminController::class, 'newregistration'])->name('newregistration');
    Route::get('/deletestaff', [AdminController::class, 'deletestaff'])->name('deletestaff');
    Route::get('/restorestaff', [AdminController::class, 'restorestaff'])->name('restorestaff');

    Route::get('/warehouse', [AdminController::class, 'warehouse'])->name('warehouse');
    Route::post('/AddnewBranch', [AdminController::class, 'AddnewBranch'])->name('AddnewBranch');
    Route::get('/branchdelte', [AdminController::class, 'branchdelte'])->name('branchdelte');
    Route::get('/restorebranch', [AdminController::class, 'restorebranch'])->name('restorebranch');

    // POS (Point of Sale) & Billing
    Route::get('/pos', [AdminController::class, 'pos'])->name('pos');
    Route::get('/purchaseproduct', [AdminController::class, 'purchaseproduct'])->name('purchaseproduct');
    Route::get('/purchaseproducts', [AdminController::class, 'purchaseproducts'])->name('purchaseproducts');
    Route::get('/Addpricetoproduct', [AdminController::class, 'Addpricetoproduct'])->name('Addpricetoproduct');
    Route::get('/addquantity', [AdminController::class, 'addquantity'])->name('addquantity');
    Route::get('/DeleteProductFromBill', [AdminController::class, 'DeleteProductFromBill'])->name('DeleteProductFromBill');
    Route::get('/cancelAll', [AdminController::class, 'cancelAll'])->name('cancelAll');
    Route::get('/secondpayment', [AdminController::class, 'secondpayment'])->name('secondpayment');
    Route::get('/purchasedcustomizedproduct', [AdminController::class, 'purchasedcustomizedproduct'])->name('purchasedcustomizedproduct');

    // Invoices & Barcodes
    Route::get('/printpdf/{id?}', [AdminController::class, 'printpdf'])->name('printpdf');
    Route::get('/invoice/{id?}', [AdminController::class, 'invoice'])->name('invoice');
    Route::get('/downloadbarcode/{data}', [productsDataController::class, 'downloadbarcode'])->name('downloadbarcode');
    Route::get('/downloadbarcodeproduct/{id?}', [AdminController::class, 'downloadbarcodeproduct'])->name('downloadbarcodeproduct');
    Route::get('/downloadallbarcodes', [AdminController::class, 'downloadallbarcodes'])->name('downloadallbarcodes');

    // Products Management
    Route::get('/products', [productsDataController::class, 'ProductsList'])->name('products');
    Route::post('/addproduct', [productsDataController::class, 'AddProduct'])->name('AddNewProduct');
    Route::get('/productview/{id}', [productsDataController::class, 'productview'])->name('productview');
    Route::get('/productedit/{id}', [productsDataController::class, 'productedit'])->name('productedit');
    Route::post('/updateproduct', [productsDataController::class, 'updateproduct'])->name('updateproduct');
    Route::get('/deleteProductlist', [productsDataController::class, 'deleteProductlist'])->name('deleteProductlist');
    Route::get('/deleteproduct', [productsDataController::class, 'deleteproduct'])->name('deleteproduct');
    Route::get('/stock/{id?}', [productsDataController::class, 'stock'])->name('stock');

    // Customized Products
    Route::get('/customizedproducts', [productsDataController::class, 'customizedproducts'])->name('customizedproducts');
    Route::post('/Addcustomizedproducts', [AdminController::class, 'Addcustomizedproducts'])->name('Addcustomizedproducts');
    Route::get('/deletecustomizedproducts', [AdminController::class, 'deletecustomizedproducts'])->name('deletecustomizedproducts');

    // Categories & Brands
    Route::get('/Categories', [AdminController::class, 'Categories'])->name('Categories');
    Route::post('/AddCategory', [AdminController::class, 'AddCategory'])->name('AddCategory');
    Route::get('/DeleteCategory', [AdminController::class, 'DeleteCategory'])->name('DeleteCategory');

    Route::get('/Brands', [AdminController::class, 'Brands'])->name('Brands');
    Route::post('/AddBrands', [AdminController::class, 'AddBrands'])->name('AddBrands');
    Route::get('/deletebrand', [AdminController::class, 'deletebrand'])->name('deletebrand');
    Route::get('/selectbrand/{id?}', [AdminController::class, 'selectbrand'])->name('selectbrand');

    // Suppliers & Admin Purchases
    Route::get('/supplierslist', [AdminController::class, 'supplierslist'])->name('supplierslist');
    Route::get('/addsuppiler', [AdminController::class, 'addsuppiler'])->name('addsuppiler');
    Route::get('/deleteSupplier', [AdminController::class, 'deleteSupplier'])->name('deleteSupplier');
    Route::get('/restoreSupplier', [AdminController::class, 'restoreSupplier'])->name('restoreSupplier');

    Route::get('/Purchases', [AdminController::class, 'Purchases'])->name('Purchases');
    Route::get('/addpurchase', [AdminController::class, 'addpurchase'])->name('addpurchase');

    // Sales & Customer History
    Route::get('/sales', [AdminController::class, 'sales'])->name('sales');
    Route::get('/dailysales/{from?}/{to?}', [AdminController::class, 'dailysales'])->name('dailysales');
    Route::get('/customerlist', [AdminController::class, 'customerlist'])->name('customerlist');
    Route::get('/purchasedlisting/{id?}', [AdminController::class, 'purchasedlisting'])->name('purchasedlisting');
    Route::get('/singletranscitiondetails/{id?}', [AdminController::class, 'singletranscitiondetails'])->name('singletranscitiondetails');
});
