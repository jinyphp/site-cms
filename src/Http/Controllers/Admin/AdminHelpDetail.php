<?php
namespace Jiny\Site\CMS\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminHelpDetail extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "site_help_detail";

        $this->actions['view']['list'] = "jiny-site-cms::admin.help_detail.list";
        $this->actions['view']['form'] = "jiny-site-cms::admin.help_detail.form";

        $this->actions['title'] = "도움말";
        $this->actions['subtitle'] = "도움말 관리합니다.";
    }
}
