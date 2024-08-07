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
            <x-form-label>타입</x-form-label>
            <x-form-item>
                {!! xInputText()
                    ->setWire('model.defer',"forms.type")
                    ->setWidth("standard")
                !!}
            </x-form-item>
        </x-form-hor>

        <x-form-hor>
            <x-form-label>제목</x-form-label>
            <x-form-item>
                {!! xInputText()
                    ->setWire('model.defer',"forms.subject")
                    ->setWidth("standard")
                !!}
            </x-form-item>
        </x-form-hor>

        <x-form-hor>
            <x-form-label>메시지</x-form-label>
            <x-form-item>
                {!! xTextarea()
                    ->setWire('model.defer',"forms.message")
                !!}
            </x-form-item>
        </x-form-hor>

        <x-form-hor>
            <x-form-label>상태</x-form-label>
            <x-form-item>
                {!! xInputText()
                    ->setWire('model.defer',"forms.status")
                    ->setWidth("standard")
                !!}
            </x-form-item>
        </x-form-hor>

        <x-form-hor>
            <x-form-label>종료일</x-form-label>
            <x-form-item>
                {!! xInputText()
                    ->setWire('model.defer',"forms.finished_at")
                    ->setWidth("standard")
                !!}
            </x-form-item>
        </x-form-hor>

    </x-navtab-item>



</x-navtab>

