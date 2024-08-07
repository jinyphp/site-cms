<?php
namespace Jiny\Site\CMS\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminNotification extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "site_notification";

        $this->actions['view']['list'] = "jiny-site-cms::admin.notification.list";
        $this->actions['view']['form'] = "jiny-site-cms::admin.notification.form";

        $this->actions['title'] = "알람관리";
        $this->actions['subtitle'] = "알람의 종류를 관리합니다.";
    }
}
