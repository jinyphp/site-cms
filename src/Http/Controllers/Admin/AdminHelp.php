<?php
namespace Jiny\Site\CMS\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminHelp extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "site_help";

        $this->actions['view']['layout'] = "jiny-site-cms::admin.help.layout";

        $this->actions['view']['list'] = "jiny-site-cms::admin.help.list";
        $this->actions['view']['form'] = "jiny-site-cms::admin.help.form";

        $this->actions['title'] = "도움말";
        $this->actions['subtitle'] = "도움말 관리합니다.";
    }

    public function index(Request $request)
    {
        if(isset($request->code) && $request->code) {
            $this->params['code'] = $request->code;
            $this->actions['params']['cate'] = $request->code;
        } else {
            // 도움말 코드가 없습니다.
        }

        if($res = parent::index($request)) {
            return $res;
        }

        return "페이지 view가 없습니다.";
    }

    /**
     * Hook
     * 생성폼이 실행될때 호출됩니다.
     */
    public function hookCreating($wire, $value)
    {
        $forms = [];
        //$forms['cate'] = $wire->actions['params']['cate'];

        // 생략가능
        return $forms; // 설정시 form 입력 초기값으로 설정됩니다.
    }


}
