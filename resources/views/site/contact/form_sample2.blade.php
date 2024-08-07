<div>
      <!-- Nav pills -->
      <ul class="nav nav-pills justify-content-center pb-2 pb-sm-3 mb-3" role="tablist">
        <li class="nav-item" role="presentation">
          <button type="button" class="nav-link active" id="customers-tab" data-bs-toggle="pill" data-bs-target="#customers" role="tab" aria-controls="customers" aria-selected="true">
            <i class="ci-shopping-bag fs-base me-2 ms-n1"></i>
            For Customers
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="retailers-tab" data-bs-toggle="pill" data-bs-target="#retailers" type="button" role="tab" aria-controls="retailers" aria-selected="false">
            <i class="ci-box fs-base me-2 ms-n1"></i>
            For Retailers
          </button>
        </li>
      </ul>

      <!-- Forms wrapper -->
      <div class="row justify-content-center">
        <div class="col-md-11 col-lg-9 col-xl-8">
          <div class="tab-content bg-body rounded-5 py-3 py-sm-4 px-4 px-sm-5">
            <p class="text-center py-3 mx-auto" style="max-width: 450px">Fill out the form below and we will reply within 24 hours. You may also directly reach out to us at <a class="text-decoration-none" href="mailto:info@cartzilla.com">info@cartzilla.com</a></p>

            <!-- Customers form -->
            <div class="tab-pane fade show active" id="customers" role="tabpanel" aria-labelledby="customers-tab">
              <div class="needs-validation" novalidate>
                <div class="row g-4">

                    <div class="col-md-6 position-relative">
                    <label for="fn" class="form-label">First name *</label>
                    <input type="text"
                        class="form-control form-control-lg rounded-pill"
                        wire:model="forms.first_name"
                        id="fn" required>
                    <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">
                        Enter your first name!
                    </div>
                  </div>

                  <div class="col-md-6 position-relative">
                    <label for="ln" class="form-label">Last name *</label>
                    <input type="text"
                        class="form-control form-control-lg rounded-pill"
                        wire:model="forms.last_name"
                        id="ln" required>
                    <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Enter your last name!</div>
                  </div>

                  <div class="col-md-6 position-relative">
                    <label for="email" class="form-label">Email *</label>
                    <input type="email"
                        class="form-control form-control-lg rounded-pill"
                        wire:model="forms.email"
                        id="email" required>
                    <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Enter your email address!</div>
                  </div>

                  <div class="col-md-6">
                    <label for="phone" class="form-label">Phone number</label>
                    <input type="tel"
                        class="form-control form-control-lg rounded-pill"
                        wire:model="forms.phone"
                        id="phone" data-input-format='{"numericOnly": true, "delimiters": ["+1 ", " ", " "], "blocks": [0, 3, 3, 2]}' placeholder="+1 ___ ___ __">
                  </div>

                  <div class="col-12 position-relative">
                    <label class="form-label">Subject *</label>
                    <select class="form-select form-select-lg rounded-pill"
                    wire:model="forms.subject"
                    data-select='{
                      "classNames": {
                        "containerInner": "form-select form-select-lg rounded-pill"
                      }
                    }' required>
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
                    <textarea class="form-control form-control-lg rounded-6"
                        wire:model="forms.message"
                        id="message"
                        rows="5" required></textarea>
                    <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Write your message!</div>
                  </div>

                  <div class="col-12 text-center pt-2 pb-3">
                    <button type="submit"
                        class="btn btn-lg btn-dark rounded-pill"
                        wire:click="submit()">
                        전송
                    </button>
                  </div>

                </div>
                </div>
            </div>

            <!-- Retailers form -->
            <div class="tab-pane fade" id="retailers" role="tabpanel" aria-labelledby="retailers-tab">
              <form class="needs-validation" novalidate>
                <div class="row g-4">
                  <div class="col-md-6 position-relative">
                    <label for="company" class="form-label">Company name *</label>
                    <input type="text" class="form-control form-control-lg rounded-pill" id="company" required>
                    <div class="invalid-tooltip bg-transparent py-0 ps-3">Enter your company name!</div>
                  </div>
                  <div class="col-md-6 position-relative">
                    <label for="person" class="form-label">Contact person *</label>
                    <input type="text" class="form-control form-control-lg rounded-pill" id="person" required>
                    <div class="invalid-tooltip bg-transparent py-0 ps-3">Enter contact person name!</div>
                  </div>
                  <div class="col-md-6 position-relative">
                    <label for="email-r" class="form-label">Email *</label>
                    <input type="email" class="form-control form-control-lg rounded-pill" id="email-r" required>
                    <div class="invalid-tooltip bg-transparent py-0 ps-3">Enter company email address!</div>
                  </div>
                  <div class="col-md-6">
                    <label for="phone-r" class="form-label">Phone number</label>
                    <input type="tel" class="form-control form-control-lg rounded-pill" id="phone-r" data-input-format='{"numericOnly": true, "delimiters": ["+1 ", " ", " "], "blocks": [0, 3, 3, 2]}' placeholder="+1 ___ ___ __">
                  </div>
                  <div class="col-md-6 position-relative">
                    <label for="website" class="form-label">Website</label>
                    <input type="text" class="form-control form-control-lg rounded-pill" id="website">
                  </div>
                  <div class="col-md-6 position-relative">
                    <label class="form-label">Subject *</label>
                    <select class="form-select form-select-lg rounded-pill" data-select='{
                      "classNames": {
                        "containerInner": "form-select form-select-lg rounded-pill"
                      }
                    }' required>
                      <option value="">Select subject</option>
                      <option value="General inquiry">General inquiry</option>
                      <option value="Product information">Product information</option>
                      <option value="Technical support">Technical support</option>
                      <option value="Account assistance">Affiliation program</option>
                      <option value="Security concerns">Marketing and promotions</option>
                      <option value="Security concerns">Press and media inquiries</option>
                    </select>
                    <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Select the subject of your message!</div>
                  </div>
                  <div class="col-12 position-relative">
                    <label for="message-r" class="form-label">Message *</label>
                    <textarea class="form-control form-control-lg rounded-6" id="message-r" rows="5" required></textarea>
                    <div class="invalid-tooltip bg-transparent py-0 ps-3">Write your message!</div>
                  </div>
                  <div class="col-12 text-center pt-2 pb-3">
                    <button type="submit" class="btn btn-lg btn-dark rounded-pill">Send message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
