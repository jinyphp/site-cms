<?php
namespace Jiny\Site\CMS\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Jiny\WireTable\Http\Controllers\WireGridPopupForms;
class AdminSliderImagesController extends WireGridPopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "cms_slider_images";

        $this->actions['view']['list'] = "jiny-site-cms::admin.sliders_images.list";
        $this->actions['view']['form'] = "jiny-site-cms::admin.sliders_images.form";

        $this->actions['title'] = "슬라이더 이미지";
        $this->actions['subtitle'] = "사이트에 표시되는 슬라이더들을 관리합니다.";
    }

    ## 목록 dbFetch 전에 실행됩니다.
    public function hookIndexing($wire)
    {
        // request 매개변수 읽기
        $code = $wire->request('code');

        // nested 조건
        // code가 동일한 조건만 검사
        $wire->DB()->where('code', $code);

        // 반환값이 있으면, 종료됩니다.
        return false;
    }

    public function hookCreating($wire, $value)
    {
        // request 매개변수 읽기
        $code = $wire->request('code');

        // nested 인자값 전달 (초기값)
        $forms['code'] = $code;

        // 설정시 form 입력 초기값으로 설정됩니다.
        return $forms;
    }
}
