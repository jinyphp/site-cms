<?php
namespace Jiny\Site\CMS\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminContact extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table'] = "site_contact";

        $this->actions['view']['list'] = "jiny-site-cms::admin.contact.list";
        $this->actions['view']['form'] = "jiny-site-cms::admin.contact.form";

        $this->actions['title'] = "Contact 관리";
        $this->actions['subtitle'] = "contact 문의 관리";
    }
}
