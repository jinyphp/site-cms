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
        $this->actions['table']['name'] = "site_notification";

        $this->actions['view']['list'] = "jiny-site-cms::admin.notification.list";
        $this->actions['view']['form'] = "jiny-site-cms::admin.notification.form";

        $this->actions['title'] = "알람관리";
        $this->actions['subtitle'] = "알람의 종류를 관리합니다.";
    }

    /**
     * Hook
     * 데이터 fetch후 호출 됩니다.
     */
    public function hookIndexed($wire, $rows)
    {
        $ids = [];
        foreach($rows as $row) {
            $ids []= $row->id;
        }


        // $noti = DB::table('site_notification_user')
        //     ->select('noti_id', DB::raw('COUNT(*) as count'))
        //     ->whereIn('noti_id', $ids)
        //     ->groupBy('noti_id')
        //     ->get();

        $noti = DB::table('site_notification_user')
            ->select('noti_id', DB::raw('COUNT(*) as count'))
            ->whereIn('noti_id', $ids)
            ->where('status', 1)  // Add this line to count only rows with status = 1
            ->groupBy('noti_id')
            ->get();

        //dd($noti);
        foreach($rows as $i => &$row) {
            if(isset($noti[$i]->count)) {
                $row->user_count = $noti[$i]->count;
            } else {
                $row->user_count = 0;
            }
        }

        return $rows;
    }

}
