<div>
    <div class="mb-3">
        <label class="form-label">유형</label>
        <div class="d-flex align-items-center">
            {!! xSelect()
                ->table('site_contact_type','title')
                ->setWire('model.defer',"forms.type")
                ->setWidth("medium")
            !!}
            @if(isAdmin())
            <a href="{{ url('/admin/site/contact/type') }}" class="btn btn-info ms-2">
                유형추가
            </a>
            @endif
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">제목</label>
        <input type="text" class="form-control" wire:model="forms.subject"
            placeholder="subject">
    </div>


    <div class="mb-3">
        <label class="form-label">문의내용</label>
        <textarea class="form-control" placeholder="Textarea" rows="20"
            wire:model="forms.message">
        </textarea>
    </div>

    <hr>
    <h3>개인정보</h3>
    <p class="mb-4">
        회원이 아닌 경우에는 개인정보를 같이 입력 주어야 합니다.
    </p>
    <div class="row">
        <div class="col-12 col-md-6 mb-3">
            <label class="form-label">이름</label>
            <input type="text" class="form-control" wire:model="forms.name"
                placeholder="name">
        </div>

        <div class="col-12 col-md-6 mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" wire:model="forms.email"
                placeholder="Email">
        </div>

        <div class="col-12 col-md-6 mb-3">
            <label class="form-label">연락처</label>
            <input type="text" class="form-control" wire:model="forms.phone"
                placeholder="phone">
        </div>

        <div class="col-12 col-md-6 mb-3">
            <label class="form-label">패스워드</label>
            <input type="password" class="form-control" wire:model="forms.password"
                placeholder="phone">
        </div>
    </div>

    <hr>

    <div class="mb-3 d-flex justify-content-center gap-2">
        <button type="submit" class="btn btn-lg btn-dark"
            wire:click="submit()">
            전송
        </button>

        @if(isAdmin())
        <a href="{{ url('/admin/site/contact') }}" class="btn btn-lg btn-primary">
            문의 관리
        </a>
        @endif
    </div>

</div>
