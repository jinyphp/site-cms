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
                <a href="/admin/site/help/cate">
                    카테고리+
                </a>
            </x-form-label>
            <x-form-item>
                {{-- {!! xInputText()
                    ->setWire('model.defer',"forms.cate")
                    ->setWidth("standard")
                !!} --}}
                {!! xSelect()
                    ->table('site_help_cate','code')
                    ->setWire('model.defer',"forms.cate")
                    ->setWidth("medium")
                !!}
            </x-form-item>
        </x-form-hor>

        <x-form-hor>
            <x-form-label>Slug</x-form-label>
            <x-form-item>
                {!! xInputText()
                    ->setWire('model.defer',"forms.slug")
                    ->setWidth("standard")
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
            <x-form-label>좋아요</x-form-label>
            <x-form-item>
                {!! xInputText()
                    ->setWire('model.defer',"forms.like")
                    ->setWidth("standard")
                !!}
            </x-form-item>
        </x-form-hor>

    </x-navtab-item>
</x-navtab>

