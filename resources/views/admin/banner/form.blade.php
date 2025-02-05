<x-navtab class="mb-3 nav-bordered">

    <!-- formTab -->
    <x-navtab-item class="show active" >

        <x-navtab-link class="rounded-0 active">
            <span class="d-none d-md-block">기본정보</span>
        </x-navtab-link>

        <x-form-hor>
            <x-form-label>활성화</x-form-label>
            <x-form-item>
                {!! xCheckbox()
                    ->setWire('model.defer',"forms.enable")
                !!}
            </x-form-item>
        </x-form-hor>

        <x-form-hor>
            <x-form-label>
                <a class="btn btn-sm btn-primary" href="/admin/site/banner/cate">
                    타입
                </a>
            </x-form-label>
            <x-form-item>
                {!! xSelect()
                    ->table('site_banner_cate','type')
                    ->setWire('model.defer',"forms.type")
                    ->setWidth("medium")
                !!}
            </x-form-item>
        </x-form-hor>

        <x-form-hor>
            <x-form-label>타이틀</x-form-label>
            <x-form-item>
                {!! xInputText()
                    ->setWire('model.defer',"forms.title")
                    ->setWidth("standard")
                !!}
            </x-form-item>
        </x-form-hor>

        <x-form-hor>
            <x-form-label>설명</x-form-label>
            <x-form-item>
                {!! xTextarea()
                    ->setWire('model.defer',"forms.content")
                !!}
            </x-form-item>
        </x-form-hor>

        <x-form-hor>
            <x-form-label>시작일</x-form-label>
            <x-form-item>
                <input type="date"
                    wire:model.defer="forms.started_at"
                    class="form-control"
                    style="width: 200px;">
            </x-form-item>
        </x-form-hor>

        <x-form-hor>
            <x-form-label>종료일</x-form-label>
            <x-form-item>
                <input type="date"
                    wire:model.defer="forms.inished_at"
                    class="form-control"
                    style="width: 200px;">

            </x-form-item>
        </x-form-hor>



    </x-navtab-item>



</x-navtab>

