<!-- Customers form -->
<div class="tab-pane fade show active" id="customers" role="tabpanel" aria-labelledby="customers-tab">
    <div class="needs-validation" novalidate>
        <div class="row g-4">

            <div class="col-md-6 position-relative">
                <label for="fn" class="form-label">First name *</label>
                <input type="text" class="form-control form-control-lg rounded-pill" wire:model="forms.first_name"
                    id="fn" required>
                <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">
                    Enter your first name!
                </div>
            </div>

            <div class="col-md-6 position-relative">
                <label for="ln" class="form-label">Last name *</label>
                <input type="text" class="form-control form-control-lg rounded-pill" wire:model="forms.last_name"
                    id="ln" required>
                <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Enter your last name!</div>
            </div>

            <div class="col-md-6 position-relative">
                <label for="email" class="form-label">Email *</label>
                <input type="email" class="form-control form-control-lg rounded-pill" wire:model="forms.email"
                    id="email" required>
                <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Enter your email address!</div>
            </div>

            <div class="col-md-6">
                <label for="phone" class="form-label">Phone number</label>
                <input type="tel" class="form-control form-control-lg rounded-pill" wire:model="forms.phone"
                    id="phone"
                    data-input-format='{"numericOnly": true, "delimiters": ["+1 ", " ", " "], "blocks": [0, 3, 3, 2]}'
                    placeholder="+1 ___ ___ __">
            </div>

            <div class="col-12 position-relative">
                <label class="form-label">Subject *</label>
                <select class="form-select form-select-lg rounded-pill" wire:model="forms.subject"
                    data-select='{
            "classNames": {
              "containerInner": "form-select form-select-lg rounded-pill"
            }
          }'
                    required>
                    <option value="">Select subject</option>
                    <option value="General inquiry">General inquiry</option>
                    <option value="Order status">Order status</option>
                    <option value="Product information">Product information</option>
                    <option value="Technical support">Technical support</option>
                    <option value="Website feedback">Website feedback</option>
                    <option value="Account assistance">Account assistance</option>
                    <option value="Security concerns">Security concerns</option>
                </select>
                <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Select the subject of your message!</div>
            </div>

            <div class="col-12 position-relative">
                <label for="message" class="form-label">Message *</label>
                <textarea class="form-control form-control-lg rounded-6" wire:model="forms.message" id="message" rows="5"
                    required></textarea>
                <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Write your message!</div>
            </div>

            <div class="col-12 text-center pt-2 pb-3">
                <button type="submit" class="btn btn-lg btn-dark rounded-pill" wire:click="submit()">
                    전송
                </button>
            </div>

        </div>
    </div>
</div>
