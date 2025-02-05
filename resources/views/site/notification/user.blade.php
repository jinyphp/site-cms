<div>
    <!-- Page title + Master switch -->
    <div class="nav flex-nowrap align-items-center justify-content-between pb-3 mb-3 mb-lg-4">
        <h1 class="h2 me-3 mb-0">사용자 알람설정</h1>
        <div class="form-check form-switch nav-link animate-underline p-0 m-0"
            data-master-checkbox='{"container": "#notifications", "label": "Select all", "labelChecked": "Unselect all"}'>
            <label for="notifications-master"
                class="form-check-label animate-target me-5">
                전체해제
            </label>
            <div class="ps-3">
                <input type="checkbox" class="form-check-input"
                id="notifications-master"
                wire:model.live="unselected">
            </div>
        </div>
    </div>

    <!-- Notification switches list -->
    <div class="d-flex flex-column gap-4">
        @foreach ($noti as $i => $item)
            <div class="form-check form-switch mb-0">
                <input type='checkbox' name='ids' value="{{ $item['id'] }}"
                    class="form-check-input"
                    wire:model.live="selected">

                <label class="form-check-label ps-2" for="exclusive-offers">
                    <span class="d-block h6 mb-2">
                        {{ $item['title'] }}
                    </span>
                    <span class="fs-sm">
                        {{ $item['content'] }}
                    </span>
                </label>
            </div>
        @endforeach
    </div>
</div>
