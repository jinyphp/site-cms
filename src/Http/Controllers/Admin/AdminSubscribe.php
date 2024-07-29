<?php
namespace Jiny\Site\CMS\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminSubscribe extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "site_subscribe";

        $this->actions['view']['list'] = "jiny-site-cms::admin.subscribe.list";
        $this->actions['view']['form'] = "jiny-site-cms::admin.subscribe.form";

        $this->actions['title'] = "구독관리";
        $this->actions['subtitle'] = "사이트 알람을 구독 관리 합니다.";
    }
}
