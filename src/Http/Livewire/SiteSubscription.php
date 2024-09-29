<?php
namespace Jiny\Site\CMS\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class SiteSubscription extends Component
{
    public $uri;
    public $widget = [];
    public $widget_id;

    public $viewLayoutFile;
    public $viewFile;

    public $email;
    public $type = "news";

    public $popupForm = false;
    public $popupPermit = false;
    public $popupWindowWidth = "4xl";
    public $popupDelete = false;
    public $mode;

    public $forms=[];

    ## Hotkey 디자인 모드
    use \Jiny\Widgets\Http\Trait\DesignMode;

    public function mount()
    {
        $this->uri = Request::path();

        // widget 정보 읽기
        $path = $this->widgetJsonPath();
        $this->widget = json_file_decode($path);


        if($user = Auth::user()) {
            $this->email = $user->email;
        }

        // 화면 레이아웃 초기화
        $this->initView();

    }

    /**
     * 출력화면을 초기화 합니다.
     */
    private function initView()
    {
        if(!$this->viewLayoutFile) {
            $this->viewLayoutFile = "jiny-site-cms"."::site.subscription.widget";;
        }

        if(!$this->viewFile) {
            //dump();
            //dump($this->widget);
            if(isset($this->widget['view']['view'])) {
                $this->viewFile = $this->widget['view']['view'];
            } else {
                $this->viewFile = "jiny-site-cms::site.subscription.scription";
            }

            //dd($this->viewFile);
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


        return view($this->viewLayoutFile,[
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

    /**
     * 입력 데이터 취소 및 초기화
     */
    public function cancel()
    {
        $this->forms = [];
        //$this->forms_old = [];
        $this->popupForm = false;
        $this->popupDelete = false;
        $this->confirm = false;
    }

    /**
     * Widgetetting
     */
    public function widgetSetting()
    {
        $this->popupForm = true;
        $this->mode = "setting";

        // widget 정보 읽기
        $path = $this->widgetJsonPath();
        $this->forms = json_file_decode($path);
    }

    public function widgetApply()
    {
        $path = $this->widgetJsonPath();
        json_file_encode($path, $this->forms);

        // 수정한 widget 정보 반영
        $this->widget = $this->forms;

        $this->popupForm = false;
        $this->mode = null;
        $this->forms = [];
    }

    private function widgetJsonPath()
    {
        // widget 파일 경로 체크
        $path = resource_path('widgets');
        $path .= DIRECTORY_SEPARATOR;

        // 디렉터리 생성
        //$dir = substr($this->uri, 0, strrpos($this->uri, '/'));
        //$dir = str_replace('/', DIRECTORY_SEPARATOR, $dir);
        $dir = str_replace('/', DIRECTORY_SEPARATOR, $this->uri);
        if(!is_dir($path.$dir)) {
            mkdir($path.$dir, 0777, true);
        }

        //dd($path.$dir);

        $path = $path.str_replace('/', DIRECTORY_SEPARATOR, $this->uri);
        if($this->widget_id) {
            $path .= DIRECTORY_SEPARATOR.$this->widget_id.".json";
        } else {
            $path .= ".json";
        }


        return $path;
    }

}
