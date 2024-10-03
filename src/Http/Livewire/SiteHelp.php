<?php
namespace Jiny\Site\CMS\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

/**
 * DB에서 데이터를 읽어 rows를 처리합니다.
 */
class SiteHelp extends Component
{
    public $actions = [];
    public $_id;

    public $code;
    public $viewFile;

    public $cates = [];
    //public $rows = [];

    public $mode;

    public $search_keyword;

    use \Jiny\WireTable\Http\Trait\Upload;

    public $forms = [];

    public $popupForm = false;
    public $popupWindowWidth = "4xl";
    public $popupDelete = false;
    public $confirm = false;
    public $message;
    use \Jiny\Widgets\Http\Trait\DesignMode;

    public function mount()
    {
        // 뷰이미지
        if(!$this->viewFile) {
            $this->viewFile = "jiny-site-cms::site.help.dashboard.cate";
        }

        $this->categoryLoad();

    }

    ## 객체를 배열로 변환
    protected function ObjToArr($objs)
    {
        $rows = [];
        foreach($objs as $item) { // 배열에서 각각의 객체를 하나씩 읽어 온다.

            $temp = []; // 객체를 변환할 빈 배열을 하나 초기화.
            foreach($item as $key => $value) {
                // 객체에서 키(프로퍼티)와 값을 분리해서 읽어 주세요.
                // 객체의 키와 값을 분리할 때는 `=>` 사용한다.
                $temp[$key] = $value;
            }

            // 변환된 하나의 개체의 배열을
            // 상위 rows 배열로 다시 넣어준다.
            $rows []= $temp;
        }

        return $rows;
    }

    private function categoryLoad()
    {
        $cates = DB::table('site_help_cate')->get();
        $this->cates = $this->ObjToArr($cates);
    }

    public function render()
    {
        switch($this->mode) {
            case 'search':
                $rows = DB::table('site_help')
                    ->where('title','like', "%".$this->search_keyword."%")
                    ->get();
                return view("jiny-site-cms::site.help.search",[
                    'rows' => $rows
                  ]);
                break;
            case 'list':
                $rows = DB::table('site_help')
                    ->where('cate','like', "%:".$this->code)
                    ->get();
                return view("jiny-site-cms::site.help.category.list",[
                  'rows' => $rows
                ]);
                break;

            case 'article':
                if(is_numeric($this->_id)) {
                    $article = DB::table('site_help')->where('id',$this->_id)->first();
                } else {
                    $article = DB::table('site_help')->where('slug',$this->_id)->first();
                }
                if($article) {
                    return view("jiny-site-cms::site.help.article.detail",[
                        'article' => $article
                    ]);
                }

                return view("jiny-site-cms::site.help.article.error",[

                ]);

                break;
        }

        return view($this->viewFile,[

        ]);
    }

    public function dashboard()
    {
        $this->mode = null;
        $this->_id = null;
    }

    public function list($code)
    {
        $this->mode = "list";
        $this->code = $code;
    }

    public function article($id)
    {
        $this->mode = "article";
        $this->_id = $id;
    }

    public function search()
    {
        $this->mode = "search";
        //dd($this->search_keyword);
    }

    public function cancel()
    {
        $this->forms = [];
        $this->popupForm = false;
        $this->popupForm2 = false;
    }

    /**
     * createCategory
     */
    public function createCategory()
    {
        $this->forms = [];
        $this->actions['view']['form'] = "jiny-site-cms::admin.help_cate.form";
        $this->popupForm = true;
    }

    public function storeCategory()
    {
        $this->popupForm = false;

        // 2. 시간정보 생성
        $this->forms['created_at'] = date("Y-m-d H:i:s");
        $this->forms['updated_at'] = date("Y-m-d H:i:s");

        DB::table('site_help_cate')->insert($this->forms);

        $this->categoryLoad();

    }

    public function editCategory($id)
    {
        $row = DB::table('site_help_cate')->where('id',$id)->first();

        $this->forms = [];
        foreach($row as $k => $v) {
            $this->forms[$k] = $v;
        }

        $this->actions['view']['form'] = "jiny-site-cms::admin.help_cate.form";
        $this->popupForm = true;

    }

    public function updateCategory($id)
    {
        $id = $this->forms['id'];
        unset($this->forms['id']);
        $this->forms['updated_at'] = date("Y-m-d H:i:s");
        DB::table('site_help_cate')
            ->where('id',$id)
            ->update($this->forms);

        $this->categoryLoad();

        $this->forms = [];
        $this->popupForm = false;
    }


    public function delete($id=null)
    {
        $this->popupDelete = true;
    }

    public function deleteCancel()
    {
        $this->popupDelete = false;
    }

    public function deleteConfirm()
    {
        $this->popupDelete = false;

        $id = $this->forms['id'];
        unset($this->forms['id']);
        DB::table('site_help_cate')
            ->where('id',$id)
            ->delete();

        $this->categoryLoad();

        $this->forms = [];
        $this->popupForm = false;

    }

    /**
     * Article
     */
    public $popupForm2;
    public function createArticle()
    {
        $this->forms = [];
        $this->actions['view']['form'] = "jiny-site-cms::admin.help.form";
        $this->popupForm2 = true;
    }

    public function storeArticle()
    {


        // 2. 시간정보 생성
        $this->forms['created_at'] = date("Y-m-d H:i:s");
        $this->forms['updated_at'] = date("Y-m-d H:i:s");

        DB::table('site_help')->insert($this->forms);

        $this->code = _getValue($this->forms['cate']);

        $this->forms = [];
        $this->popupForm2 = false;


    }

    public function editArticle($id)
    {
        $row = DB::table('site_help')->where('id',$id)->first();

        $this->forms = [];
        foreach($row as $k => $v) {
            $this->forms[$k] = $v;
        }

        $this->actions['view']['form'] = "jiny-site-cms::admin.help.form";
        $this->popupForm2 = true;

    }

    public function updateArticle($id)
    {
        $id = $this->forms['id'];
        unset($this->forms['id']);
        $this->forms['updated_at'] = date("Y-m-d H:i:s");
        DB::table('site_help')
            ->where('id',$id)
            ->update($this->forms);

        $this->code = _getValue($this->forms['cate']);

        $this->forms = [];
        $this->popupForm2 = false;
    }

    public function deleteConfirmArticle()
    {
        $this->popupDelete = false;

        $id = $this->forms['id'];
        unset($this->forms['id']);
        DB::table('site_help')
            ->where('id',$id)
            ->delete();

        $this->forms = [];
        $this->popupForm2 = false;
    }

    public function likeUp($id)
    {
        // 해당 레코드의 like 값을 +1 증가
        DB::table('site_help')->where('id', $id)->increment('like');
    }

    public function likeDown($id)
    {
        // 해당 레코드의 like 값을 +1 증가
        DB::table('site_help')->where('id', $id)->decrement('like');
    }


    // 검색어 초기화 메서드
    public function clearSearch()
    {
        $this->search_keyword = ''; // 입력값 초기화
    }
}
