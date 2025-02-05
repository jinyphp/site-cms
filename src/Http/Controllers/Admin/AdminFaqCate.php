<?php
namespace Jiny\Site\CMS\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminFaqCate extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table']['name'] = "site_faq_cate";

        $this->actions['view']['list'] = "jiny-site-cms::admin.faq_cate.list";
        $this->actions['view']['form'] = "jiny-site-cms::admin.faq_cate.form";

        $this->actions['title'] = "FAQ 카테고리";
        $this->actions['subtitle'] = "FAQ를 관리합니다.";
    }
}
