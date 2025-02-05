<div class="d-flex flex-column gap-2">
    <div style="position: relative;">
        <div class="d-flex align-items-center">
            {{-- <span class="position-absolute ps-3">
                <i class="fe fe-search"></i>
            </span> --}}
            <label for="SearchHelp" class="visually-hidden">도움말 검색</label>
            <!-- input  -->
            <input type="search"
                id="SearchHelp"
                class="form-control ps-6 border-0 py-3 smooth-shadow-md"
                placeholder="질문, 주제 또는 키워드를 입력하세요"
                style="padding-left: 2.5rem; border-radius: 0.5rem; box-shadow: 0 0.25rem 0.5rem rgba(0,0,0,0.1), 0 0.125rem 0.25rem rgba(0,0,0,0.08); transition: box-shadow 0.25s ease-in-out, background-color 0.25s ease-in-out; background-color: #fff;"
                wire:model.live="search_keyword"
                wire:keydown.enter="search">
        </div>


        <!-- X 아이콘: 입력값이 있을 경우에만 보여줌 -->
        @if($search_keyword)
        <span style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"
            wire:click="clearSearch">
            &#x2715; <!-- X 문자 -->
        </span>
        @endif
    </div>

    {{-- <button type="submit"
        class="btn btn-lg btn-primary px-3"
        wire:click="search()">
        <i class="ci-search fs-lg ms-n2 ms-sm-0"></i>
        <span class="ms-2 d-sm-none">
            검색
        </span>
    </button> --}}
</div>
