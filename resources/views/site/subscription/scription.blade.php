<div class="d-sm-flex align-items-center justify-content-between bg-body-tertiary rounded-4 py-4 px-4 px-md-5">
    <div class="mb-4 mb-sm-0 me-sm-4">
    <h3 class="h5 mb-2">Sign up to our newsletter</h3>
    <p class="fs-sm mb-0">Receive our latest updates about our products &amp; promotions</p>
    </div>

    <div>
        <input type="text" class="form-control mb-2" wire:model="email">
        <button type="button" class="btn btn-dark" wire:click="subscribe()">
            <i class="ci-mail fs-base ms-n1 me-2"></i>
            Subscribe
            </button>
    </div>

</div>
