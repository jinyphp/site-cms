
<x-wire-dialog-modal wire:model="popupForm2" :maxWidth="$popupWindowWidth">
    <x-slot name="title">
        @if (isset($forms['id']))
            Help {{ __('자료 수정') }}
        @else
            Help {{ __('신규 입력') }}
        @endif
    </x-slot>

    <x-slot name="content">
        @if(isset($actions['view']['form']))
            @includeIf($actions['view']['form'])
        @else
            입력폼 양식이 지정되지 않았습니다. <br>
            컨트롤러 actions의 view->form 항목을 설정해 주세요.
        @endif
    </x-slot>


    <x-slot name="footer">
        @if($message)
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @endif


    @if(isset($actions['view']['form']))

        @if (isset($forms['id']))
        {{-- 수정폼--}}
        <div class="flex justify-between">
            <div> {{-- 2단계 삭제 --}}
                @if($popupDelete)
                <span class="text-red-600">정말로 삭제를 진행할까요?</span>
                <button type="button" class="btn btn-danger btn-sm"
                    wire:click="deleteConfirmArticle">삭제</button>
                @else
                <button type="button" class="btn btn-danger"
                    wire:click="delete">삭제</button>
                @endif
            </div>
            <div> {{-- right --}}
                <button type="button" class="btn btn-secondary"
                    wire:click="cancel">취소</button>
                <button type="button" class="btn btn-info"
                    wire:click="updateArticle('{{$forms['id']}}')">수정</button>
            </div>
        </div>
        @else
        {{-- 생성폼 --}}
        <div class="flex justify-between">
            <div></div>
            <div class="text-right">
                <button type="button" class="btn btn-secondary"
                    wire:click="cancel">취소</button>
                <button type="button" class="btn btn-primary"
                    wire:click="storeArticle">저장</button>
            </div>
        </div>
        @endif
    @else
        <button type="button" class="btn btn-secondary"
            wire:click="cancel">취소</button>
    @endif
    </x-slot>
</x-wire-dialog-modal>
