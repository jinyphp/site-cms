<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::middleware(['web'])->group(function(){

    Route::get('/admin/cms/sliders', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminSlidersController::class,
        "index"]);
    Route::get('/admin/cms/sliders/images/{code}', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminSliderImagesController::class,
        "index"]);
});
