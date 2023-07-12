<div id="cynosure_faqs">

    @foreach($faqs as $faq)
    <div class="cynosure_faq_item">
        <button class="collapsed" data-toggle="collapse" data-target="#cynosure_faq_{{ $loop->iteration }}" aria-expanded="true" aria-controls="cynosure_faq_{{ $loop->iteration }}">
            <h3>{{ $loop->iteration }}. {{ $faq['question'] }}</h3>
            <span class="cynosure_faq_toggler"><i class="toggler_btn"></i></span>
        </button>
        <div id="cynosure_faq_{{ $loop->iteration }}" class="collapse" aria-labelledby="#heading-{{ $loop->iteration }}" data-parent="#cynosure_faqs">
            <p>{!! $faq['answer'] !!}</p>
        </div>
    </div>
    @endforeach

</div>