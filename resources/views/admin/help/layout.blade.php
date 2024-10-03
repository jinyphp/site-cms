<x-theme theme="admin.sidebar">
    <x-theme-layout>

        {{-- Title --}}
        <x-flex-between>
            <div class="page-title-box">
                <x-flex class="align-items-center gap-2">
                    <h1 class="align-middle h3 d-inline">
                        @if (isset($actions['title']))
                        {{$actions['title']}}
                        @endif

                        @if(isset($code))
                        ({{$code}})
                        @else
                        (카테고리가 선택되어 있지 않습니다.)
                        @endif
                    </h1>

                </x-flex>
                <p>
                    @if (isset($actions['subtitle']))
                        {{$actions['subtitle']}}
                    @endif
                </p>
            </div>

            <div class="page-title-box">
                <x-breadcrumb-item>
                    {{$actions['route']['uri']}}
                </x-breadcrumb-item>

                <div class="mt-2 d-flex justify-content-end gap-2">
                    <x-btn-video>
                        Video
                    </x-btn-video>

                    <x-btn-manual>
                        Manual
                    </x-btn-manual>
                </div>
            </div>
        </x-flex-between>


        <section>
            <main>
                {{-- CRUD 테이블 --}}
                @livewire('WireTable-PopupForm', [
                    'actions'=>$actions
                ])
            </main>
        </section>

    </x-theme-layout>
</x-theme>


