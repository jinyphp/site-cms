@if(!empty($rows))
    <div class="row">
        @foreach ($rows as $item)
        <div class="col-3">
            <div class="card">
                <img src="/{{$item->image}}" alt="" class="card-img-top">

                <div class="card-header px-4 pt-4">
                    <x-flex class="gap-2 align-items-start">
                        <div>
                            <input type='checkbox' name='ids'
                            value="{{ $item->id }}"
                            class="form-check-input"
                            wire:model.live="selected">
                        </div>


                        <h5 class="card-title mb-0">
                            <x-click wire:click="edit({{$item->id}})">
                                {{$item->title}}
                            </x-click>

                        </h5>
                    </x-flex>

                    <a href="/admin/cms/sliders">
                        <div class="badge bg-warning my-2">
                            {{$item->code}}
                        </div>
                    </a>

                </div>
                <div class="card-body px-4 pt-2">
                    <p>{{$item->description}}</p>

                </div>
                <div class="card-footer">
                    <x-flex-between>
                        <div>{{$item->manager}}</div>
                        <div>{{$item->created_at}}</div>
                    </x-flex-between>
                </div>
            </div>


        </div>
    @endforeach
    </div>
@endif
