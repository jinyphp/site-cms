<?php
namespace Jiny\Site\CMS\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
use Illuminate\Support\Facades\DB;


class SiteHelpSearch extends Component
{
    public $actions = [];
    public $search_keyword;
    public $viewFile;

    public function mount()
    {
        // 뷰이미지 기본값
        if(!$this->viewFile) {
            $this->viewFile = "jiny-site-cms::site.help.search.keyword";
        }
    }

    public function render()
    {
        return view($this->viewFile,[
        ]);
    }

    public function search()
    {
        //dd("search");
        // 검색 이벤트 발생
        $this->dispatch('search_result', $this->search_keyword);
    }

    // 검색어 초기화 메서드
    public function clearSearch()
    {
        $this->search_keyword = ''; // 입력값 초기화
    }

}
