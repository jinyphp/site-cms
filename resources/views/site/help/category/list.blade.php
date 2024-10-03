<div>

    <!-- Hero -->
    @includeIf('jiny-site-cms::site.help.hero', ['cates' => $cates])

    <!-- Help topics -->
    <section class="container py-5">
        <div class="row g-0 pt-md-2 pt-xl-4">
            <div class="col-md-4 col-lg-3 pb-2 pb-sm-3 pb-md-0 mb-4 mb-md-0">
                 {{-- wire:click="dashboard()" --}}
                <h2 class="h5 border-bottom pb-3 pb-sm-4 mb-0">
                    <a href="/help">
                        도움말 주제
                    </a>
                </h2>

                @includeIf('jiny-site-cms::site.help.cate', ['cates' => $cates])
            </div>


            <!-- Article content -->
            <div class="col-md-8 col-lg-9">
                <div class="d-flex align-items-start border-bottom ps-md-4 pb-3 pb-sm-4">
                    <a class="btn btn-sm btn-outline-secondary border-0 p-0 pe-2"
                        href="/help"
                        aria-label="Back to main topic">

                        <i class="ci-chevron-left fs-4"></i>

                    </a>
                    <h2 class="h5 d-flex min-w-0 mb-0">
                        <span class="d-md-none">
                            {{$code}}
                        </span>
                        <span class="text-truncate d-none d-md-inline">
                            {{$code}}
                        </span>
                    </h2>
                </div>
                <div class="position-relative">
                    <div class="position-absolute top-0 start-0 h-100 border-start d-none d-md-block"></div>
                    <div class="row g-0">
                        <div class="col-xl-11 col-xxl-10 pt-4 ps-md-4">
                            <ul>
                                @foreach($rows as $item)
                                <li class="d-flex align-items-center gap-2">
                                    <a class="nav-link hover-effect-underline fw-normal py-2"
                                            href="/help/{{$code}}/{{$item->id}}">
                                            {{$item->title}}
                                    </a>

                                    @if($design)
                                    <x-click wire:click="editArticle({{$item->id}})">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                        </svg>
                                    </x-click>
                                    @endif
                                </li>
                                @endforeach



                            </ul>

                            @if($design)
                            <div>
                                <a class="d-flex align-items-center gap-2 hover-effect-underline fw-normal py-2"
                                    href="javascript:void(0);"
                                    wire:click="createArticle()">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                    </svg>

                                    <span>추가</span>
                                </a>
                            </div>
                            @endif




                            <!-- Contact CTA -->
                            <div class="pt-4 pb-1 pb-sm-3 pb-md-4 pb-xl-5 mt-2 mt-sm-3">
                                <h3 class="fs-sm pb-sm-1">질문에 대한 답변을 찾을 수 없나요?</h3>
                                <a class="btn btn-lg btn-primary" href="/contact">Contact us</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>


    </section>

    {{-- 글작성 팝업 --}}
    @if($design)
        @if($popupForm2)
            @includeIf("jiny-site-cms::site.help.article.popup_forms")
        @endif
    @endif


</div>
