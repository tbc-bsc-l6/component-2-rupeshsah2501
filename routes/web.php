<?php


use App\Http\Controllers\ProductController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/',[AdminLoginController::class,'index'])->name('admin.login');



Route::get('products/home',[ProductController::class,'home'])->name('products.home');

Route::get('/products/create',[ProductController::class,'create'])->name('products.create');

Route::post('/products/store',[ProductController::class,'store']);

Route::get('products/{id}/edit',[ProductController::class,'edit'])->name('product.edit');

Route::get('/products/products',[ProductController::class,'products'])->name('products.products');

Route::put('products/{id}/update',[ProductController::class,'update'])->name('products.update');

Route::get('/products/{id}/show',[ProductController::class,'show']);

Route::get('/products/{id}/delete',[ProductController::class,'destroy']);

Route::post('/admin/login', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');

// Route::group(['prefix' => '/admin'],function()
// {
//     Route::group(['Middleware' => 'admin.guest'],function(){
//         Route::get('/login' , [AdminLoginController :: class, 'index']) -> name('admin.login');
//         Route::post('/authenticate' , [AdminLoginController :: class, 'authenticate']) -> name('admin.authenticate');
//     });

//     Route::group(['Middleware' => 'admin.auth'],function(){

//         Route::get('/home' , [HomeController :: class, 'index']) -> name('admin.home');
//         Route::get('/logout' , [HomeController :: class, 'logout']) -> name('admin.logout');

//         // //Category Routes
//         // Route::get('/categories' , [CategoryController :: class,'index']) -> name('categories.index');

        
//         // Route::get('/categories/create' , [CategoryController :: class,'create']) -> name('categories.create');
//         // Route::post('/categories' , [CategoryController :: class,'store']) -> name('categories.store');

//         // Route::get('/getSlug',function(Request $request){
//         //     $slug = '';
//         //     if(!empty($request->title)){
//         //         $slug = Str::slug($request->title);

//         //     }

//         //     return response()->json([
//         //         'status' => true,
//         //         'slug' =>$slug

//         //     ]);
//         // })->name('getSlug');

//     });
// });


