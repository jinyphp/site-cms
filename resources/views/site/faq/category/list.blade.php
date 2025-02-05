<div>

    <!-- Hero -->
    @includeIf('jiny-site-cms::site.faq.hero', ['cates' => $cates])

    <!-- Help topics -->
    <section class="container py-5">
        <div class="row g-0 pt-md-2 pt-xl-4">
            <div class="col-md-4 col-lg-3 pb-2 pb-sm-3 pb-md-0 mb-4 mb-md-0">
                 {{-- wire:click="dashboard()" --}}
                <h2 class="h5 border-bottom pb-3 pb-sm-4 mb-0">
                    <a href="{{Prefix('faq')}}">
                        FAQ 주제
                    </a>
                </h2>

                @includeIf('jiny-site-cms::site.faq.cate', ['cates' => $cates])
            </div>


            <!-- Article content -->
            <div class="col-md-8 col-lg-9">
                <div class="d-flex align-items-start border-bottom ps-md-4 pb-3 pb-sm-4">
                    <a class="btn btn-sm btn-outline-secondary border-0 p-0 pe-2"
                        href="{{Prefix('faq')}}"
                        aria-label="Back to main topic">

                        <i class="ci-chevron-left fs-4"></i>

                    </a>
                    <h2 class="h5 d-flex min-w-0 mb-0">
                        <span class="d-md-none">
                            FAQ: {{$code}}
                        </span>
                        <span class="text-truncate d-none d-md-inline">
                            FAQ: {{$code}}
                        </span>
                    </h2>
                </div>
                <div class="position-relative">
                    <div class="position-absolute top-0 start-0 h-100 border-start d-none d-md-block"></div>
                    <div class="row g-0">
                        <div class="pt-4 ps-md-4">

                            <div class="accordion" id="faq">
                                @foreach ($rows as $i => $item)
                                    <!-- Question -->
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="faqHeading-{{ $i }}">
                                            <button type="button" class="accordion-button hover-effect-underline collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#faqCollapse-{{ $i }}" aria-expanded="false"
                                                aria-controls="faqCollapse-{{ $i }}">
                                                <span class="me-2">
                                                    {{ $item->question }}
                                                </span>
                                            </button>
                                        </h3>
                                        <div class="accordion-collapse collapse" id="faqCollapse-{{ $i }}"
                                            aria-labelledby="faqHeading-{{ $i }}" data-bs-parent="#faq">
                                            <div class="accordion-body">
                                                {{ $item->answer }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>



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
                                <a class="btn btn-lg btn-primary"
                                    href="{{Prefix('contact')}}">
                                    Contact us
                                </a>
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
            @includeIf("jiny-site-cms::site.faq.article.popup_forms")
        @endif
    @endif


</div>
