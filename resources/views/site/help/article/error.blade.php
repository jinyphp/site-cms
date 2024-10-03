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
                            아티클이 존재하지 않습니다.
                        </span>
                        <span class="text-truncate d-none d-md-inline">
                            아티클이 존재하지 않습니다.
                        </span>


                    </h2>
                </div>
                <div class="position-relative">
                    <div class="position-absolute top-0 start-0 h-100 border-start d-none d-md-block"></div>
                    <div class="row g-0">
                        <div class="col-xl-11 col-xxl-10 pt-4 ps-md-4">

                            <div class="alert alert-danger">
                                아티클이 존재하지 않습니다.
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