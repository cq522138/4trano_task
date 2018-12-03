<?php

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
    return view('welcome');
});
Route::get('index', function () {
    // Hiển thị danh sách khách hàng
    return view('modules.customer.index');
});

// Tạo 1 nhóm route với tiền tố customer
Route::prefix('customer')->group(function () {
    Route::get('index', function () {
        // Hiển thị danh sách khách hàng
        echo "Hiển thị danh sách khách hàng";
    });

    Route::get('create', function () {
        // Hiển thị Form tạo khách hàng
    });

    Route::post('store', function () {
        // Xử lý lưu dữ liệu tạo khách hàng thong qua phương thức POST từ form
    });

    Route::get('{id}/show', function () {
        // Hiển thị thông tin chi tiết khách hàng có mã định danh id
    });

    Route::get('{id}/edit', function () {
        // Hiển thị Form chỉnh sửa thông tin khách hàng
    });

    Route::patch('{id}/update', function () {
        // xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form
    });

    Route::delete('{id}', function () {
        // Xóa thông tin dữ liệu khách hàng
    });
});


Route::prefix('customer')->group(function () {

    Route::get('index', 'CustomerController@index');

    Route::get('create', 'CustomerController@create');

    Route::post('store', 'CustomerController@store');

    Route::get('{id}/show', 'CustomerController@show');

    Route::get('{id}/edit', 'CustomerController@edit');

    Route::patch('{id}/update', 'CustomerController@update');

    Route::delete('{id}', 'CustomerController@destroy');

});

Route::get('/tasks', 'TaskController@index')->name('tasks.index');
