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
            <x-form-label>카테고리</x-form-label>
            <x-form-item>
                {!! xInputText()
                    ->setWire('model.defer',"forms.code")
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
            <x-form-label>아이콘</x-form-label>
            <x-form-item>
                {!! xInputText()
                    ->setWire('model.defer',"forms.icon")
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

    </x-navtab-item>
</x-navtab>
