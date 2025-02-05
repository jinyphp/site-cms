<div class="d-flex flex-column flex-sm-row gap-2">
    <div style="position: relative;">
        <input type="search"
               class="form-control form-control-lg"
               placeholder="질문, 주제 또는 키워드를 입력하세요"
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
            검색
        </span>
    </button>
</div>
