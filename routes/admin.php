<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use Livewire\Admin\CityComponent;
use Livewire\Admin\ShowProducts;
use Livewire\Admin\CreateProduct;
use Livewire\Admin\EditProduct;
use Livewire\Admin\ShowCategory;
use Livewire\Admin\BrandComponent;
use Livewire\Admin\DepartmentComponent;
use Livewire\Admin\ShowDepartment;
use Livewire\Admin\UserComponent;
use Livewire\Admin\CitasComponent;

Route::get('/', ShowProducts::class)->name('admin.index');
Route::get('products/create', CreateProduct::class)->name('admin.products.create');
Route::get('products/{product}/editar',EditProduct::class)->name('admin.products.edit');
Route::post('products/{product}/files', [ProductController::class, 'files'])->name('admin.products.files');

Route::get('orders', [OrderController::class, 'index'])->name('admin.orders.index');
Route::get('orders/{order}', [OrderController::class, 'show'])->name('admin.orders.show');

Route::get('categories', [CategoryController::class, 'index'])->name('admin.categories.index');
Route::get('categories/{category}', ShowCategory::class)->name('admin.categories.show');

Route::get('brands', BrandComponent::class)->name('admin.brands.index');

Route::get('departments', DepartmentComponent::class)->name('admin.departments.index');
Route::get('departments/{department}', ShowDepartment::class)->name('admin.departments.show');

Route::get('cities/{city}', CityComponent::class)->name('admin.cities.show');

Route::any('users', UserComponent::class)->name('admin.users2.index');
Route::get('citas', CitasComponent::class)->name('admin.citas.index');
