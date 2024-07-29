<?php
namespace Jiny\Site\CMS;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\Support\Facades\File;
use Livewire\Livewire;

class JinySiteCMSServiceProvider extends ServiceProvider
{
    private $package = "jiny-site-cms";
    public function boot()
    {
        // 모듈: 라우트 설정
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', $this->package);

        // 데이터베이스
        $this->loadMigrationsFrom(__DIR__.'/../databases/migrations');

    }

    public function register()
    {
        /* 라이브와이어 컴포넌트 등록 */
        $this->app->afterResolving(BladeCompiler::class, function () {

            Livewire::component('SiteSliders', \Jiny\Site\CMS\Http\Livewire\SiteSlider::class);



            Livewire::component('SiteSubscription',
                \Jiny\Site\CMS\Http\Livewire\SiteSubscription::class);

        });
    }
}
