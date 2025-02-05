<?php
namespace Jiny\Site\CMS\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminContactType extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table']['name'] = "site_contact_type";

        $this->actions['view']['list'] = "jiny-site-cms::admin.contact_type.list";
        $this->actions['view']['form'] = "jiny-site-cms::admin.contact_type.form";

        $this->actions['title'] = "Contact 유형";
        $this->actions['subtitle'] = "contact 유형 관리";
    }
}
