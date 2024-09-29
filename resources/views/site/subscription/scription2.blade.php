<div class="d-sm-flex align-items-center justify-content-between bg-body-tertiary rounded-4 py-4 px-4 px-md-5">
    <div class="mb-4 mb-sm-0 me-sm-4">
        <h3 class="h5 mb-2">Sign up to our newsletter</h3>
        <p class="fs-sm mb-0">Receive our latest updates about our products &amp; promotions</p>
    </div>

    <div class="row">
        <div class="col-6">
            <input type="text" class="form-control mb-2" wire:model="email">
        </div>
        <div class="col-6">
            <button type="button" class="btn btn-dark" wire:click="subscribe()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-envelope ms-n1 me-2" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                </svg>
                Subscribe..
            </button>
        </div>
    </div>

</div>
