<?php
namespace Jiny\Site\CMS\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

/**
 * DB에서 데이터를 읽어 rows를 처리합니다.
 */
class CmsList extends Component
{
    public $code;
    public $viewFile;
    public $rows = [];

    public function mount()
    {
        // 뷰이미지
        if(!$this->viewFile) {
            $this->viewFile = "jiny-site-cms::sliders.basic.list";
        }
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

    public function render()
    {
        return view($this->viewFile,[

        ]);
    }
}
