<?php
namespace Jiny\Site\CMS\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminSiteEvent extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "site_event";

        $this->actions['view']['list'] = "jiny-site-cms::admin.event.list";
        $this->actions['view']['form'] = "jiny-site-cms::admin.event.form";

        $this->actions['title'] = "이벤트관리";
        $this->actions['subtitle'] = "사이트 이벤트를 관리 합니다.";
    }
}
