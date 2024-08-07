<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * 베너 목록을 반환합니다.
 */
if(!function_exists("getSiteBanner")) {
    function getSiteBanner($limit=5, $code=null) {
        $db = DB::table('site_banner')->orderBy('id', 'desc');

        if($code) {
            if(is_array($code)) {
                foreach($code as $key => $value) {
                    $db->where($key,$value);
                }
            } else {
                $db->where('type',$code);
            }
        }

        if(is_array($limit)) {
            $db->offset($limit[0]-1)  // Skip the first 9 records
            ->limit($limit[1]);   // Fetch the next 8 records (10th to 17th)
        } else {
            $db->limit($limit);
        }

        return $db->get();
    }
}


if(!function_exists("getSiteFaq")) {
    function getSiteFaq($limit=5, $code=null) {
        $db = DB::table('site_faq')->orderBy('id', 'desc');

        if($code) {
            if(is_array($code)) {
                foreach($code as $key => $value) {
                    $db->where($key,$value);
                }
            } else {
                $db->where('cate',$code);
            }
        }

        if(is_array($limit)) {
            $db->offset($limit[0]-1)  // Skip the first 9 records
            ->limit($limit[1]);   // Fetch the next 8 records (10th to 17th)
        } else {
            $db->limit($limit);
        }

        return $db->get();
    }
}
