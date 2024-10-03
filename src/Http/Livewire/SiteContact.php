<?php
namespace Jiny\Site\CMS\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class SiteContact extends Component
{
    public $tablename = "site_contact";

    public $viewFile;
    public $viewSuccessFile;
    public $forms = [];

    public $status = false;
    public function mount()
    {
        $this->status = false; //초기화

        if(!$this->viewFile) {
            $this->viewFile = "jiny-site-cms::site.contact.form_sample1";
        }

        if(!$this->viewSuccessFile) {
            $this->viewSuccessFile = "jiny-site-cms::site.contact.form_success";
        }
    }

    public function render()
    {
        if($this->status) {
            return view($this->viewSuccessFile,[

            ]);
        }

        return view($this->viewFile,[

        ]);
    }

    public function submit()
    {
        $this->status = true;

        DB::table('site_contact')->insert($this->forms);

        $this->forms = [];
    }

    public function clear()
    {
        $this->status = false;
        $this->forms = [];
    }
}
