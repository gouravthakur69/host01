<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;



Route::get('/',[FrontendController::class, 'index']);



// products  \
Route::get('/products', [FrontendController::class, 'index'])->name('product.index');

Route::get('/products/create', [FrontendController::class, 'create'])->name('product.create');
// Route::get('/', [FrontendController::class, 'create'])->name('product.create');
Route::post('/products/store', [FrontendController::class, 'store'])->name('product.store');


// admin group routes
Route::prefix('op')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/products', [AdminController::class, 'adminShowAllProduct'])->name('admin.product.index') ;
    Route::get('/products/comments', [AdminController::class, 'adminGetAllComments'])->name('admin.comment.index');
    Route::delete('/products/delete/{id}', [AdminController::class, 'adminDeleteProduct'])->name('admin.product.delete');
    Route::delete('/products/comments/{id}', [AdminController::class, 'adminDeleteComment'])->name('admin.comment.delete');
});


Route::get('/products/{id}', [FrontendController::class, 'show'])->name('product.show');
Route::get('/products/edit/{id}', [FrontendController::class, 'edit'])->name('product.edit');
Route::post('/products/update/{id}', [FrontendController::class, 'update'])->name('product.update');

//Route::get('products/{id}', [CommentController::class, 'loadComments'])->name('product.show');
Route::post('/products/{id}', [CommentController::class, 'addComment']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


            // products  \\


            // sliders

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {

    Route::get('dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index']);

Route::controller(App\Http\Controllers\Admin\SliderController::class)->group(function () {
        Route::get('sliders','index');
        Route::get('sliders/create','create');
        Route::post('sliders/create','store');
        Route::get('sliders/{slider}/edit', 'edit');
        Route::put('sliders/{slider}','update');
        Route::get('sliders/{slider}/delete','destroy');

    });

});

                 // sliders \\
