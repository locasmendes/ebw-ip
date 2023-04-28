<div class="faq-wrapper container">
    <div class="accordion accordion-flush" id="accordionFaq">
    @forelse($items as $item)
        <div class="accordion-item faq-item">
            <h2 class="accordion-header faq-question" id="heading-{{$loop->index}}">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$loop->index}}" aria-expanded="false" aria-controls="collapse-{{$loop->index}}">
                    {{$item->question}}
                </button>
            </h2>
            <div id="collapse-{{$loop->index}}" class="accordion-collapse collapse" aria-labelledby="heading-{{$loop->index}}" data-bs-parent="#accordionFaq">
                <div class="accordion-body faq-answer">
                    {{$item->answer}}
                </div>
            </div>
        </div>
    @empty
    @endforelse
    </div>
</div>
