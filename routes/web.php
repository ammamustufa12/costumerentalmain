<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;  // Make sure to import the DashboardController
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UserController;
use App\Http\Controllers\CostumesController;
use App\Http\Controllers\CostumesCategoryController;
use App\Http\Controllers\Frontendcontroller;
use App\Http\Controllers\DanceCategoryController;
use App\Http\Controllers\InstrumentRentalCategoryController;
use App\Http\Controllers\InstrumentRentalController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\DanceClassesController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[Frontendcontroller::class,'index'])->name('home');
Route::get('/about',[Frontendcontroller::class,'aboutus'])->name('aboutus');
Route::get('/contact',[Frontendcontroller::class,'contactus'])->name('contactus');
Route::get('/product/{slug}', [FrontendController::class, 'productdetail'])->name('product.detail');
Route::get('/costumes/{id}',[FrontendController::class,'costumes'])->name('costumes');
//
Route::get('/costumes/category/{slug}', [FrontendController::class, 'costumeByCategory'])->name('frontend.costumes.bycategory');

// All dance classes page
Route::get('/dance-classes', [FrontendController::class, 'allDanceClasses'])->name('frontend.danceclasses');
Route::get('/costumes', [FrontendController::class, 'allCostumes'])->name('frontend.costumes');
Route::get('/dance-classes/{id}', [FrontendController::class, 'danceclassDetail'])->name('danceclass.detail');

// Single dance class detail
// Route::get('/dance-classes/{id}', [FrontendController::class, 'danceClassDetail'])->name('frontend.danceclasses.detail');


// Remove this line to avoid conflict
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); // Keep this one
    

    // User Management Routes
    Route::get('/Admin/UserManagement', [UserController::class, 'index'])->name('UserManagement.index');
    Route::get('/Admin/UserManagement/create', [UserController::class, 'create'])->name('UserManagement.create');
    Route::post('/Admin/UserManagement/store', [UserController::class, 'store'])->name('UserManagement.store');
    Route::get('/Admin/UserManagement/{id}', [UserController::class, 'show'])->name('UserManagement.show'); // 👈 Add this
    Route::get('/Admin/UserManagement/{id}/edit', [UserController::class, 'edit'])->name('UserManagement.edit');
    Route::put('/Admin/UserManagement/{id}', [UserController::class, 'update'])->name('UserManagement.update');
    Route::delete('/Admin/UserManagement/{id}', [UserController::class, 'destroy'])->name('UserManagement.destroy');
    

     //category management
     Route::get('dancecategories', [DanceCategoryController::class, 'index'])->name('dancecategories.index');
Route::get('dancecategories/create', [DanceCategoryController::class, 'create'])->name('dancecategories.create');
Route::post('dancecategories', [DanceCategoryController::class, 'store'])->name('dancecategories.store');
Route::get('dancecategories/{id}/edit', [DanceCategoryController::class, 'edit'])->name('dancecategories.edit');
Route::put('dancecategories/{id}', [DanceCategoryController::class, 'update'])->name('dancecategories.update');
Route::delete('dancecategories/{id}', [DanceCategoryController::class, 'destroy'])->name('dancecategories.destroy');

// Dance Classes Routes
Route::get('danceclasses', [DanceClassesController::class, 'index'])->name('danceclasses.index');
Route::get('danceclasses/create', [DanceClassesController::class, 'create'])->name('danceclasses.create');
Route::post('danceclasses', [DanceClassesController::class, 'store'])->name('danceclasses.store');
Route::get('danceclasses/{danceclass}', [DanceClassesController::class, 'show'])->name('danceclasses.show');
Route::get('danceclasses/{danceclass}/edit', [DanceClassesController::class, 'edit'])->name('danceclasses.edit');
Route::put('danceclasses/{danceclass}', [DanceClassesController::class, 'update'])->name('danceclasses.update');
Route::delete('danceclasses/{danceclass}', [DanceClassesController::class, 'destroy'])->name('danceclasses.destroy');

//rental management 
Route::get('/rentals', [RentalController::class, 'index'])->name('rentals.index');
Route::get('/rentals/create', [RentalController::class, 'create'])->name('rentals.create');
Route::post('/rentals', [RentalController::class, 'store'])->name('rentals.store');
Route::get('/rentals/{rental}', [RentalController::class, 'show'])->name('rentals.show');
Route::get('/rentals/{rental}/edit', [RentalController::class, 'edit'])->name('rentals.edit');
Route::put('/rentals/{rental}', [RentalController::class, 'update'])->name('rentals.update');
Route::delete('/rentals/{rental}', [RentalController::class, 'destroy'])->name('rentals.destroy');
Route::get('/get-costume-price/{id}', [RentalController::class, 'getCostumePrice'])->name('costume.price');



// Costume Management Routes
Route::get('/Admin/CostumeManagement', [CostumesController::class, 'index'])->name('CostumeManagement.index');
Route::get('/Admin/CostumeManagement/create', [CostumesController::class, 'create'])->name('CostumeManagement.create');
Route::post('/Admin/CostumeManagement', [CostumesController::class, 'store'])->name('CostumeManagement.store');
Route::get('/Admin/CostumeManagement/{costume}/edit', [CostumesController::class, 'edit'])->name('CostumeManagement.edit');
Route::put('/Admin/CostumeManagement/{costume}', [CostumesController::class, 'update'])->name('CostumeManagement.update');
Route::delete('/Admin/CostumeManagement/{costume}', [CostumesController::class, 'destroy'])->name('CostumeManagement.destroy');
Route::get('/Admin/CostumeManagement/{costume}', [CostumesController::class, 'show'])->name('CostumeManagement.show');
Route::post('/admin/costume-management/gallery-upload', [CostumesController::class, 'uploadGalleryImage'])
    ->name('CostumeManagement.gallery.upload');
// Store the new costume data (including file upload)
Route::post('/Admin/CostumeManagement/store', [CostumesController::class, 'store'])->name('CostumeManagement.store');

    //Costume Category Management
Route::get('/costume-categories', [CostumesCategoryController::class, 'index'])->name('costumecategories.index');
Route::get('/costume-categories/create', [CostumesCategoryController::class, 'create'])->name('costumecategories.create');
Route::post('/costume-categories', [CostumesCategoryController::class, 'store'])->name('costumecategories.store');
Route::get('/costume-categories/{id}', [CostumesCategoryController::class, 'show'])->name('costumecategories.show');
Route::get('/costume-categories/{id}/edit', [CostumesCategoryController::class, 'edit'])->name('costumecategories.edit');
Route::put('/costume-categories/{id}', [CostumesCategoryController::class, 'update'])->name('costumecategories.update');
Route::delete('/costume-categories/{id}', [CostumesCategoryController::class, 'destroy'])->name('costumecategories.destroy');


//instrument-rental-categories
Route::get('/instrument-rental-categories', [InstrumentRentalCategoryController::class, 'index'])->name('instrumentrentalcategories.index');
Route::get('/instrument-rental-categories/create', [InstrumentRentalCategoryController::class, 'create'])->name('instrumentrentalcategories.create');
Route::post('/instrument-rental-categories', [InstrumentRentalCategoryController::class, 'store'])->name('instrumentrentalcategories.store');
Route::get('/instrument-rental-categories/{id}', [InstrumentRentalCategoryController::class, 'show'])->name('instrumentrentalcategories.show');
Route::get('/instrument-rental-categories/{id}/edit', [InstrumentRentalCategoryController::class, 'edit'])->name('instrumentrentalcategories.edit');
Route::put('/instrument-rental-categories/{id}', [InstrumentRentalCategoryController::class, 'update'])->name('instrumentrentalcategories.update');
Route::delete('/instrument-rental-categories/{id}', [InstrumentRentalCategoryController::class, 'destroy'])->name('instrumentrentalcategories.destroy');


// Show a list of instrument rentals
Route::get('instrumentrentals', [InstrumentRentalController::class, 'index'])->name('instrumentrentals.index');
Route::get('instrumentrentals/create', [InstrumentRentalController::class, 'create'])->name('instrumentrentals.create');
Route::post('instrumentrentals', [InstrumentRentalController::class, 'store'])->name('instrumentrentals.store');
Route::get('instrumentrentals/{instrumentrental}', [InstrumentRentalController::class, 'show'])->name('instrumentrentals.show');
Route::get('instrumentrentals/{instrumentrental}/edit', [InstrumentRentalController::class, 'edit'])->name('instrumentrentals.edit');
Route::put('instrumentrentals/{instrumentrental}', [InstrumentRentalController::class, 'update'])->name('instrumentrentals.update');
Route::delete('instrumentrentals/{instrumentrental}', [InstrumentRentalController::class, 'destroy'])->name('instrumentrentals.destroy');


    //Booking Management
    Route::get('/Admin/BookingManagement',[BookingController::class,'index'])->name('BookingManagement.index');
    Route::get('/Admin/BookingManagement/create',[BookingController::class,'create'])->name('BookingManagement.create');

    //AppointmentManagement
    Route::get('/Admin/AppointmentManagement',[AppointmentController::class,'index'])->name('AppointmentManagement.index');
    Route::get('/Admin/AppointmentManagement/create',[AppointmentController::class,'create'])->name('AppointmentManagement.create');
    
    //Rental Management 
    // Route::get('/Admin/RentalManagement',[RentalController::class,'index'])->name('RentalManagement.index');
    // Route::get('/Admin/RentalManagement/create',[RentalController::class,'create'])->name('RentalManagement.create');

});

require __DIR__.'/auth.php';