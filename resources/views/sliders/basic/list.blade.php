<div>
    @if($code)
    <div id="carouselExampleIndicators-{{$code}}" class="carousel slide">
        {{-- 단축 이동 버튼 --}}
        @if(count($rows) > 1)
        <div class="carousel-indicators">
            @foreach ($rows as $i => $item)
            <button type="button"
                data-bs-target="#carouselExampleIndicators-{{$code}}"
                data-bs-slide-to="{{$i}}"
                @if($i == 0)
                class="active"
                @endif
                aria-current="true"
                aria-label="Slide-{{$i}}"></button>
            @endforeach
        </div>
        @endif

        {{-- 슬라이드 목록 --}}
        <div class="carousel-inner">
            @foreach ($rows as $i => $item)
            <div class="carousel-item
            @if($i == 0)
                active
            @endif
            ">
                <img src="/{{$item['image']}}" class="d-block w-100" alt="...">
            </div>
            @endforeach
        </div>

        @if(count($rows) > 1)
        {{-- 이전 버튼 --}}
        <button class="carousel-control-prev" type="button"
            data-bs-target="#carouselExampleIndicators-{{$code}}" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        {{-- 다음 버튼 --}}
        <button class="carousel-control-next" type="button"
            data-bs-target="#carouselExampleIndicators-{{$code}}" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        @endif
    </div>
    @else
    <div>슬라이드 코드가 지정되어 있지 않습니다.</div>
    @endif
</div>

