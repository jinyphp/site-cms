<?php
namespace Jiny\Site\CMS\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

use Jiny\Site\Http\Controllers\SiteController;
class SiteHelpCateArticle extends SiteController
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        $this->actions['view']['layout'] = "jiny-site-cms::site.help.article.layout";

    }

    public function index(Request $request)
    {
        if(isset($request->code) && $request->code) {
            $this->params['code'] = $request->code;
            $this->actions['params']['cate'] = $request->code;

            $this->params['id'] = $request->id;
            $this->actions['params']['id'] = $request->id;
        } else {
            // 도움말 코드가 없습니다.
        }

        if($res = parent::index($request)) {
            return $res;
        }

        return "페이지 view가 없습니다.";
    }

}
