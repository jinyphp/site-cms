<?php
namespace Jiny\Site\CMS\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminSlidersController extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "cms_sliders";

        $this->actions['view']['list'] = "jiny-site-cms::admin.sliders.list";
        $this->actions['view']['form'] = "jiny-site-cms::admin.sliders.form";

        $this->actions['title'] = "슬라이더";
        $this->actions['subtitle'] = "사이트에 표시되는 슬라이더들을 관리합니다.";
    }
}
