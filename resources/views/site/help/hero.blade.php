
<section class="container pt-3 pt-sm-4">
    <div class="position-relative">
        <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none-dark rtl-flip"
            style="background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)"></span>
        <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none d-block-dark rtl-flip"
            style="background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)"></span>
        <div class="row align-items-center position-relative z-1">
            <div class="col-lg-7 col-xl-5 offset-xl-1 py-5">
                <div class="px-4 px-sm-5 px-xl-0 pe-lg-4">

                    <h1 class="text-center text-sm-start mb-4">
                        어떻게 도와드릴까요?
                    </h1>

                    <div class="d-flex flex-column flex-sm-row gap-2">
                        <div style="position: relative;">
                            <input type="search"
                                   class="form-control form-control-lg"
                                   placeholder="무엇에 도움이 필요합니까?"
                                   aria-label="Search field"
                                   wire:model.live="search_keyword"
                                   wire:keydown.enter="search"
                                   id="searchInput"
                                   style="padding-right: 30px;">

                            <!-- X 아이콘: 입력값이 있을 경우에만 보여줌 -->
                            @if($search_keyword)
                            <span style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"
                                wire:click="clearSearch">
                                &#x2715; <!-- X 문자 -->
                            </span>
                            @endif

                        </div>



                        <button type="submit"
                            class="btn btn-lg btn-primary px-3"
                            wire:click="search()">
                            <i class="ci-search fs-lg ms-n2 ms-sm-0"></i>
                            <span class="ms-2 d-sm-none">
                                Search
                            </span>
                        </button>
                    </div>
                    <div class="nav gap-2 pt-3 pt-sm-4 mt-1 mt-sm-0">
                        <span class="nav-link text-body-secondary pe-none p-0 me-1">Common topics:</span>
                        @foreach($cates as $cate)
                        <a class="nav-link text-body-emphasis
                            text-decoration-underline p-0 me-1"
                            href="/help/{{$code}}">
                            {{$cate['title']}}
                        </a>
                        @endforeach


                        {{-- <a class="nav-link text-body-emphasis text-decoration-underline p-0 me-1"
                            href="#!">refunds</a>
                        <a class="nav-link text-body-emphasis text-decoration-underline p-0 me-1"
                            href="#!">delivery</a>
                        <a class="nav-link text-body-emphasis text-decoration-underline p-0 me-1"
                            href="#!">dashboard</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-xl-1 d-none d-lg-block">
                <div class="ratio rtl-flip" style="--cz-aspect-ratio: calc(356 / 526 * 100%)">
                    <img src="/assets/img/help/hero-light.png" class="d-none-dark" alt="Image">
                    <img src="/assets/img/help/hero-dark.png" class="d-none d-block-dark" alt="Image">
                </div>
            </div>
        </div>
    </div>
</section>
