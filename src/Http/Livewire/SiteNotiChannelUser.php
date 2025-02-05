<?php
namespace Jiny\Site\CMS\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class SiteNotiChannelUser extends Component
{
    public $code;
    public $viewFile;
    public $user_id;

    public $selected = [];
    public $unselected;
    public $status = [];
    public $noti = [];

    public function mount()
    {
        $this->user_id = Auth::user()->id;

        // 뷰이미지
        if(!$this->viewFile) {
            $this->viewFile = "jiny-site-cms::site.channel.user";
        }

        // noti 목록
        $this->notiLoad();

        // 사용자별 상태
        $this->initUserNoti();




    }

    private function notiLoad()
    {
        $noti = DB::table("site_noti_channel")->get();
        $this->noti = [];
        foreach($noti as $i => $item) {
            $this->noti[$i] = [];
            foreach($item as $key => $value) {
                $this->noti[$i][$key] = $value;
            }
        }
    }

    private function initUserNoti()
    {
        $userStatus = DB::table("site_noti_channel_user")
            ->where('user_id', $this->user_id)
            ->get();

        $this->selected = [];
        foreach($this->noti as $i => $item) {
            $this->selected[$i] = 0;
            foreach($userStatus as $status) {
                if($status->noti_id == $item['id']) {
                    if($status->status) {
                        $this->selected[$i] = $item['id'];
                    }
                }
            }
        }

        // check all unselected
        $cnt = 0;
        foreach($userStatus as $status) {
            if($status->status) {
                $cnt++;
            }
        }

        if($cnt == count($this->noti)) {
            $this->unselected = true;
        } else {
            $this->unselected = false;
        }
    }



    public function render()
    {
        return view($this->viewFile,[
        ]);
    }


    private function notiById($id)
    {
        foreach($this->noti as $item) {
            if($item['id'] == $id) {
                return $item;
            }
        }

        return false;
    }

    private function isUserNoti($id, $rows)
    {
        foreach($rows as $item) {
            if($item->noti_id == $id) {
                return $item;
            }
        }
        return false;
    }

    private function notiStatus($id)
    {
        if(in_array($id, $this->selected)) {
            return 1;
        }

        return 0;
    }

    private function notiUpdate($item, $status)
    {
        DB::table("site_noti_channel_user")
            ->where('user_id', $this->user_id)
            ->where('noti_id', $item['id'])
            ->update([
                'status' => $status,
                'updated_at' => date("Y-m-d H:i:s")
            ]);
    }

    private function notiCreate($item, $status)
    {
        DB::table("site_noti_channel_user")
            ->insert([
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'user_id' => $this->user_id,
                'noti_id' => $item['id'],
                'status' => $status
            ]);
    }

    // hook
    public function updatedSelected($value)
    {
        $rows = DB::table("site_noti_channel_user")
            ->where('user_id', $this->user_id)
            ->get();

        // $userStatus = [];
        // foreach($rows as $row) {
        //     $userStatus []= $row;
        // }

        $update = [];
        foreach($this->noti as $item) {
            $status = $this->notiStatus($item['id']);

            if($noti = $this->isUserNoti($item['id'], $rows)) {
                // 업데이트
                if($noti->status != $status) {
                    $this->notiUpdate($item, $status);
                }
            } else {
                // create
                $this->notiCreate($item, $status);
            }
        }


        // check all unselected
        $rows = DB::table("site_noti_channel_user")
            ->where('user_id', $this->user_id)
            ->get();
        $cnt = 0;
        // dump($rows);
        foreach($rows as $row) {
            if($row->status == 1) {
                $cnt++;
            }
        }

        if($cnt == count($this->noti)) {
            //dump($cnt);
            //dd(count($this->noti));
            $this->unselected = true;
        } else {
            $this->unselected = false;
        }
    }

    // hook
    public function updatedUnselected($value)
    {
        //dd($value);
        if($value == true) {
            DB::table("site_noti_channel_user")
            ->where('user_id', $this->user_id)
            ->update([
                'status' => 1,
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        } else {
            DB::table("site_noti_channel_user")
            ->where('user_id', $this->user_id)
            ->update([
                'status' => 0,
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }

        $this->initUserNoti();
    }

}
