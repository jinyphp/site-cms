{{-- 컨트롤러 기본 레이아웃 --}}
<x-www-app>
    <x-www-layout>
        <section class="py-8 bg-light">
            <div class="container my-lg-8">
                <div class="row align-items-center justify-content-center gy-2">
                    <div class="col-md-6 col-12">
                        <!-- caption-->
                        <div class="d-flex flex-column gap-5">
                            <div class="d-flex flex-column gap-1">
                                <h1 class="fw-bold mb-0 display-3">어떻게 도와드릴까요?</h1>
                                <!-- para -->
                                <p class="mb-0 text-dark">질문이 있으신가요? 고객센터를 통해 검색해보세요</p>
                            </div>
                            <div class="d-flex flex-column gap-2">
                                <div class="pe-md-6">

                                    @livewire('site-help-search',[
                                        'viewFile' => 'jiny-site-cms::site.help.search.keyword2'
                                    ])
                                </div>
                                <span class="d-block">또는 필요한 도움을 빠르게 찾기 위해 카테고리를 선택하세요</span>


                                <div class="nav gap-2 pt-3 pt-sm-4 mt-1 mt-sm-0">
                                    <span class="nav-link text-body-secondary pe-none p-0 me-1">일반적인 주제:</span>

                                    @foreach(getHelpCategories() as $cate)
                                    <a class="nav-link text-body-emphasis
                                        text-decoration-underline p-0 me-1"
                                        href="/support/help/{{$cate->code}}">
                                        {{$cate->title}}
                                    </a>
                                    @endforeach

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="d-flex align-items-center justify-content-end">
                            <!-- img  -->
                            <img src="/assets/images/png/3d-girl.png" alt="설정하는 소녀" class="text-center img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <x-www-main>
            @livewire('site-help')
        </x-www-main>

    </x-www-layout>
</x-www-app>

