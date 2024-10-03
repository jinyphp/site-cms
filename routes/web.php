<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::middleware(['web'])->group(function(){

    Route::get('/admin/site/event', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminSiteEvent::class,
        "index"]);

    Route::get('/admin/site/subscribe', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminSubscribe::class,
        "index"]);

    Route::get('/admin/site/banner', [
            \Jiny\Site\CMS\Http\Controllers\Admin\AdminBanner::class,
            "index"]);

    Route::get('/admin/site/notification', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminNotification::class,
        "index"]);

    Route::get('/admin/site/faq', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminFaq::class,
        "index"]);





    Route::get('/admin/site/contact', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminContact::class,
        "index"]);

    Route::get('/admin/site/sliders', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminSlidersController::class,
        "index"]);

    Route::get('/admin/site/sliders/images/{code}', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminSliderImagesController::class,
        "index"]);
});


/**
 * 도움말 기능
 */
Route::middleware(['web'])->group(function(){
    Route::get('/help', [
        \Jiny\Site\CMS\Http\Controllers\Site\SiteHelp::class,
        "index"]);

    Route::get('/help/{code?}', [
        \Jiny\Site\CMS\Http\Controllers\Site\SiteHelpCate::class,
        "index"]);

    Route::get('/help/{code?}/{id?}', [
        \Jiny\Site\CMS\Http\Controllers\Site\SiteHelpCateArticle::class,
        "index"]);


    ## Admin
    Route::get('/admin/site/help/cate', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminHelpCate::class,
        "index"]);

    Route::get('/admin/site/help/{code?}', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminHelp::class,
        "index"]);
});
