<div>
    <!-- Hero -->
    @includeIf('jiny-site-cms::site.help.hero', ['cates' => $cates])


    {{-- <h2>Design : {{$design}}</h2> --}}


    <!-- Category cards -->
    <section class="container pt-4">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 g-sm-3 g-md-4">

            <!-- Category -->
            @foreach ($cates as $cate)
            <div class="col">
                <div class="card h-100 bg-body-tertiary border-0 p-md-2">
                    <div class="card-body">
                        <h3 class="h5 d-flex mb-4 gap-2">

                            {{-- <i class="ci-delivery fs-xl pe-1 mt-1 me-2"></i> --}}
                            {!! $cate['icon'] !!}

                            <a href="/help/{{$cate['code']}}">
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

                        </h3>

                        {{-- {{$cate['id'].":".$cate['code']}} --}}

                        <ul class="nav flex-column gap-3">
                            @foreach(table_top5('site_help', $where=[
                                'cate' => $cate['id'].":".$cate['code']
                            ]) as $item)
                            <li>
                                <a class="nav-link hover-effect-underline fw-normal p-0"
                                    href="/help/{{$cate['code']}}/{{$item->id}}">
                                    {{$item->title}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="card-footer nav bg-transparent border-0 pt-0">
                        <a class="nav-link animate-underline px-0 py-2"
                            href="/help/{{$cate['code']}}">
                            <span class="animate-target">더보기</span>
                            <i class="ci-chevron-right fs-base ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

            @if($design)
            <div class="col">
                <div class="card h-100 bg-body-tertiary border-0 p-md-2">
                    <div class="card-body">
                        <button class="btn btn-primary d-flex gap-2" wire:click="createCategory()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-database-add" viewBox="0 0 16 16">
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0"/>
                                <path d="M12.096 6.223A5 5 0 0 0 13 5.698V7c0 .289-.213.654-.753 1.007a4.5 4.5 0 0 1 1.753.25V4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.5 4.5 0 0 1-.813-.927Q8.378 15 8 15c-1.464 0-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13h.027a4.6 4.6 0 0 1 0-1H8c-1.464 0-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10q.393 0 .774-.024a4.5 4.5 0 0 1 1.102-1.132C9.298 8.944 8.666 9 8 9c-1.464 0-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777M3 4c0-.374.356-.875 1.318-1.313C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4"/>
                            </svg>
                            <span>
                                Add Category
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            @endif

        </div>
    </section>

    @if($design)
        @if($popupForm)
            @includeIf("jiny-site-cms::site.help.dashboard.popup_forms")
        @endif
    @endif


</div>
