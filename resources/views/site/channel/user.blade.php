<div>

    <div class="d-flex align-items-center gap-2">
        <h2 class="h6 pt-5 mt-md-2">Communication channels</h2>

        <div class="d-flex pt-5 mt-md-2">
            <label for="noti-channel-master"
                class="form-check-label">
                전체선택
            </label>
            <div class="ps-3">
                <input type="checkbox" class="form-check-input"
                id="noti-channel-master"
                wire:model.live="unselected">
            </div>
        </div>
    </div>

    <div class="d-flex flex-column gap-2">
        @foreach($noti as $item)
        <div class="form-check">
            <input type="checkbox" class="form-check-input"
                name='ids' value="{{ $item['id'] }}"
                wire:model.live="selected">
            <label for="sms" class="form-check-label">{{$item['title']}}</label>
        </div>
        @endforeach


    </div>
</div>
