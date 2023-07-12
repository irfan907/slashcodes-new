<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
        @foreach($faqs as $faq)
            {
                "@type": "Question",
                "name": "{{ $faq['question'] }}",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "{{ strip_tags($faq['answer']) }}"
                }
            }
            @if(!$loop->last)
            ,
            @endif
        @endforeach
        ]
    }
</script>