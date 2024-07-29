<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::middleware(['web'])->group(function(){

    Route::get('/admin/site/subscribe', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminSubscribe::class,
        "index"]);

    Route::get('/admin/site/sliders', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminSlidersController::class,
        "index"]);

    Route::get('/admin/site/sliders/images/{code}', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminSliderImagesController::class,
        "index"]);
});

