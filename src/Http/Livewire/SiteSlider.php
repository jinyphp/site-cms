<?php
namespace Jiny\Site\CMS\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

/**
 * CmsList 컴포넌트 상속
 * 이미지 슬라이더 처리
 */
use Jiny\Site\CMS\Http\Livewire\CmsList;
class SiteSlider extends CmsList
{
    public $code;
    public $tablename = "cms_slider_images";

    public function mount()
    {
        parent::mount();
        $this->getImages($this->code);
    }

    private function getImages($code)
    {
        $objs = DB::table($this->tablename)
            ->where('code', $code)
            ->where('enable',1)
            ->orderBy('pos',"desc")
            ->get();

        $this->rows = $this->ObjToArr($objs);

    }

    public function render()
    {
        return view($this->viewFile,[

        ]);
    }
}
