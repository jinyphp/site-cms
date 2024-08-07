<?php
namespace Jiny\Site\CMS\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class SiteNotificationUser extends Component
{
    public $code;
    public $viewFile;
    public $user_id;

    public $selected = [];
    public $status = [];

    public $noti = [];

    public function mount()
    {
        $this->user_id = Auth::user()->id;

        // 뷰이미지
        if(!$this->viewFile) {
            $this->viewFile = "jiny-site-cms::site.notification.user";
        }

        // noti 목록
        $noti = DB::table("site_notification")->get();
        foreach($noti as $i => $item) {
            $this->noti[$i] = [];
            foreach($item as $key => $value) {
                $this->noti[$i][$key] = $value;
            }
        }


    }



    public function render()
    {

        /*
        // 사용자별 상태
        $status = DB::table("site_notification_user")
            ->where('user_id', $this->user_id)
            ->get();

        $this->selected = [];
        $this->status = [];

        foreach($rows as $i => &$noti) {
            //$this->selected[$i] = 0;

            if($status) {
                foreach($status as $item) {
                    // 데이터 존재
                    if($noti->id == $item->noti_id) {
                        $this->status[$i] = $item->status;
                        if($item->status) {
                            // 선택
                            $this->selected[$i] = $noti->id;
                        }
                        //
                        break;
                    }
                }
            }

        }

        //dd($this->selected);
        */

        return view($this->viewFile,[

        ]);
    }

    // hook
    public function updatedSelected($value)
    {
        // dump($value);
        // $noti = $this->noti[$value];
        // dump($noti);

        // $row = DB::table("site_notification_user")
        //     ->where('user_id', $this->user_id)
        //     ->where('noti_id',$noti['id'])
        //     ->first();
        // dd($row);
        /*

        $noti_id = $this->selected[$value];
        dump($value);
        dump($noti_id);

        $row = DB::table("site_notification_user")
            ->where('user_id', $this->user_id)
            ->where('noti_id',$noti_id)
            ->first();

        dump($row);
        if($row) {

            if($row->status) {
                $status = null;
                //dd("off");
            } else {
                $status = "1";
            }

            dd($status);

            // 업데이트
            DB::table("site_notification_user")
            ->where('user_id', $this->user_id)
            ->where('noti_id',$noti_id)
            ->update([
                'status' => $status
            ]);
        } else {
            //dd("insert");
            // 신규삽입
            $status = "1";
            DB::table("site_notification_user")
            ->insert([
                'user_id' => $this->user_id,
                'noti_id' => $noti_id,
                'status' => $status
            ]);
        }
            */


    }
}
