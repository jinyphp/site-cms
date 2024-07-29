<?php
namespace Jiny\Site\CMS\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SiteSubscription extends Component
{
    public $viewFile;
    public $email;
    public $type = "news";

    public function mount()
    {
        if(!$this->viewFile) {
            $this->viewFile = "jiny-site-cms::site.subscription.live";
        }

        if($user = Auth::user()) {
            $this->email = $user->email;
        }

    }

    public function render()
    {
        if($this->email) {
            $row = DB::table('site_subscribe')
                ->where('email', $this->email)
                ->whereNull('del')
                ->first();

            if($row) {
                return view("jiny-site-cms::site.subscription.success",[
                    //'rows' => $rows
                ]);
            }
        }


        return view($this->viewFile,[
            //'rows' => $rows
        ]);
    }

    public function subscribe()
    {
        $row = DB::table('site_subscribe')
                ->where('email', $this->email)
                ->first();
        if($row) {
            // 재구독
            DB::table('site_subscribe')
                ->update([
                    'del' => null
                ]);

        } else {
            // 신규 구독
            $forms = [];

            $forms['email'] = $this->email;
            $forms['type'] = $this->type;
            $forms['created_at'] = date("Y-m-d H:i:s");
            $forms['updated_at'] = date("Y-m-d H:i:s");


            DB::table('site_subscribe')->insert($forms);
            //dd("dd");
        }



    }

    public function unsubscribe()
    {
        if($this->email) {
            DB::table('site_subscribe')
                ->where('email', $this->email)
                ->update([
                    'del' => date("Y-m-d H:i:s")
                ]);
        }
    }
}
