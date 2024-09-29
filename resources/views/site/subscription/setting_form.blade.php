<x-navtab class="mb-3 nav-bordered">

    <x-navtab-item class="show active" >
        <x-navtab-link class="rounded-0 active">
            <span class="d-none d-md-block">기본정보</span>
        </x-navtab-link>

        <x-form-hor>
            <x-form-label>화면</x-form-label>
            <x-form-item>
                {!! xInputText()
                    ->setWire('model.defer',"forms.view.view")
                    ->setWidth("standard")
                !!}
            </x-form-item>
        </x-form-hor>


    </x-navtab-item>
</x-navtab>
