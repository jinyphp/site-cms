<?php
namespace Jiny\Site\CMS\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

use Jiny\Site\Http\Controllers\SiteController;
class SiteHelp extends SiteController
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        //$this->actions['view']['layout'] = "jiny-site-cms::site.help.layout";

        // 기본값 지정
        $this->viewFileLayout = "jiny-site-cms::site.help.layout";

    }

}
