<div class="accordion accordion-alt-icon" id="faq">
    @foreach (getSiteFaq(5) as $i => $item)
        <!-- Question -->
        <div class="accordion-item">
            <h3 class="accordion-header" id="faqHeading-{{ $i }}">
                <button type="button" class="accordion-button hover-effect-underline collapsed" data-bs-toggle="collapse"
                    data-bs-target="#faqCollapse-{{ $i }}" aria-expanded="false"
                    aria-controls="faqCollapse-{{ $i }}">
                    <span class="me-2">
                        {{ $item->question }}

                    </span>
                </button>
            </h3>
            <div class="accordion-collapse collapse" id="faqCollapse-{{ $i }}"
                aria-labelledby="faqHeading-{{ $i }}" data-bs-parent="#faq">
                <div class="accordion-body">
                    {{ $item->answer }}
                </div>
            </div>
        </div>
    @endforeach
</div>
