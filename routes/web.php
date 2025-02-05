<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::middleware(['web'])->group(function(){
    // config:jiny.prefix 참고
    $admin = Prefix('admin');

    Route::get($admin.'/site/event', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminSiteEvent::class,
        "index"]);

    Route::get($admin.'/site/event/cate', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminSiteEventCate::class,
        "index"]);

    Route::get($admin.'/site/subscribe', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminSubscribe::class,
        "index"]);

    Route::get($admin.'/site/banner', [
            \Jiny\Site\CMS\Http\Controllers\Admin\AdminBanner::class,
            "index"]);

    Route::get($admin.'/site/banner/cate', [
            \Jiny\Site\CMS\Http\Controllers\Admin\AdminBannerCate::class,
            "index"]);

    Route::get($admin.'/site/notification', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminNotification::class,
        "index"]);

    Route::get($admin.'/site/channel', [
            \Jiny\Site\CMS\Http\Controllers\Admin\AdminNotiChannel::class,
            "index"]);

    /**
     * 슬라이더 관리
     */
    Route::get($admin.'/site/sliders', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminSliders::class,
        "index"]);

    Route::get($admin.'/site/sliders/{code}', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminSliderImages::class,
        "index"]);
});



/**
 * faq
 */
Route::middleware(['web'])->group(function(){
    // config:jiny.prefix 참고
    $prefix = Prefix('faq');
    Route::get($prefix, [
        \Jiny\Site\CMS\Http\Controllers\Site\SiteFaq::class,
        "index"]);

    Route::get($prefix.'/{code?}', [
        \Jiny\Site\CMS\Http\Controllers\Site\SiteFaqCate::class,
        "index"]);

    Route::get($prefix.'/{code?}/{id?}', [
        \Jiny\Site\CMS\Http\Controllers\Site\SiteFaqCateArticle::class,
        "index"]);

    $admin = Prefix('admin');
    Route::get($admin.'/site/faq', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminFaq::class,
        "index"]);
    Route::get($admin.'/site/faq/cate', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminFaqCate::class,
        "index"]);



});

/**
 * 도움말 기능
 */
Route::middleware(['web'])->group(function(){
    // config:jiny.prefix 참고
    $prefix = Prefix('help');
    Route::get($prefix, [
        \Jiny\Site\CMS\Http\Controllers\Site\SiteHelp::class,
        "index"]);

    Route::get($prefix.'/{code?}', [
        \Jiny\Site\CMS\Http\Controllers\Site\SiteHelpCate::class,
        "index"]);

    Route::get($prefix.'/{code?}/{id?}', [
        \Jiny\Site\CMS\Http\Controllers\Site\SiteHelpCateArticle::class,
        "index"]);


    ## Admin
    $admin = Prefix('admin');
    Route::get($admin.'/site/help/cate', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminHelpCate::class,
        "index"]);

    Route::get($admin.'/site/help/{code?}', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminHelp::class,
        "index"]);
});


/**
 * contact
 */
Route::middleware(['web'])->group(function(){
    // $prefix = Prefix('contact');
    // Route::get($prefix, [
    //     \Jiny\Site\CMS\Http\Controllers\Site\SiteSupportContact::class,
    //     "index"]);

    ## Admin
    $admin = Prefix('admin');
    Route::get($admin.'/site/contact', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminContact::class,
        "index"]);

    Route::get($admin.'/site/contact/type', [
        \Jiny\Site\CMS\Http\Controllers\Admin\AdminContactType::class,
        "index"]);
});
