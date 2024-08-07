<div>
<!-- Notification switches list -->
<div class="d-flex flex-column gap-4">

    @foreach($noti as $i => $item)
    <div class="form-check form-switch mb-0">
        <input type='checkbox' name='ids'
            value="{{ $item['id'] }}"
            class="form-check-input"
            wire:model.live="selected" >

      <label class="form-check-label ps-2" for="exclusive-offers">
        <span class="d-block h6 mb-2">
            {{$item['title']}}
        </span>
        <span class="fs-sm">
            {{$item['content']}}
        </span>
      </label>
    </div>
    @endforeach


  </div>
</div>
