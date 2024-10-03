<!-- Nav in format of list group -->
<nav class="list-group list-group-borderless pt-4 pe-md-4">
    @foreach($cates as $cate)
    <div class="d-flex align-items-center gap-2">
        <a class="list-group-item list-group-item-action d-flex
            align-items-center
            @if($cate['code'] == $code)
            active
            @endif
            "
            href="/help/{{$cate['code']}}">
            {!!$cate['icon']!!}
            {{$cate['title']}}
        </a>

        @if($design)
        <x-click wire:click="editCategory('{{$cate['id']}}')">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
            </svg>
        </x-click>
        @endif
    </div>
    @endforeach

    @if($design)
    <a class="list-group-item list-group-item-action d-flex align-items-center gap-2"
        href="javascript:void(0);"
        wire:click="createCategory()">

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
        </svg>

        <span>카테고리 추가</span>
    </a>
    @endif

</nav>

@if($design)
    @if($popupForm)
        @includeIf("jiny-site-cms::site.help.dashboard.popup_forms")
    @endif
@endif
