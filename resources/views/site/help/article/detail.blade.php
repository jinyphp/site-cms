<div>

    <!-- Hero -->
    @includeIf('jiny-site-cms::site.help.hero', ['cates' => $cates])


    <!-- Help topics -->
    <section class="container py-5">
        <div class="row g-0 pt-md-2 pt-xl-4">
            <div class="col-md-4 col-lg-3 pb-2 pb-sm-3 pb-md-0 mb-4 mb-md-0">
                <h2 class="h5 border-bottom pb-3 pb-sm-4 mb-0" wire:click="dashboard()">
                    도움말 주제
                </h2>

                <!-- Nav in format of list group -->
                @includeIf('jiny-site-cms::site.help.cate', ['cates' => $cates])
            </div>


            <!-- Article content -->
            <div class="col-md-8 col-lg-9">
                <div class="d-flex align-items-start border-bottom ps-md-4 pb-3 pb-sm-4">
                    <a class="btn btn-sm btn-outline-secondary border-0 p-0 pe-2"
                        href="/help/{{$code}}"
                        aria-label="Back to main topic">

                        <i class="ci-chevron-left fs-4"></i>

                    </a>
                    <h2 class="h5 d-flex min-w-0 mb-0 gap-2">
                        <span class="d-md-none">
                            {{$article->title}}
                        </span>
                        <span class="text-truncate d-none d-md-inline">
                            {{$article->title}}
                        </span>

                        @if($design)
                        <x-click wire:click="editArticle({{$article->id}})">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>
                        </x-click>
                        @endif
                    </h2>
                </div>
                <div class="position-relative">
                    <div class="position-absolute top-0 start-0 h-100 border-start d-none d-md-block"></div>
                    <div class="row g-0">
                        <div class="col-xl-11 col-xxl-10 pt-4 ps-md-4">
                            <p class="fs-sm">
                                {!! nl2br( markdown($article->content) ) !!}
                            </p>

                            <div class="pt-4">
                                <h4 class="fs-sm pb-1">이 정보가 도움이 되었나요?</h4>
                                <div class="d-flex align-items-center gap-3">
                                    <span>
                                        {{$article->like}}
                                    </span>

                                    <button type="button"
                                        class="btn btn-outline-secondary"
                                        wire:click="likeUp('{{$article->id}}')">
                                        <i class="ci-thumbs-up fs-base me-1 ms-n1"></i>
                                        Yes
                                    </button>
                                    <button type="button"
                                        class="btn btn-outline-secondary"
                                        wire:click="likeDown('{{$article->id}}')">
                                        <i class="ci-thumbs-down fs-base me-1 ms-n1"></i>
                                        No
                                    </button>
                                </div>
                            </div>

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
