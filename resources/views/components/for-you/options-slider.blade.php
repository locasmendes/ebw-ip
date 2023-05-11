<div class="options-slider carousel slide" id="optionsCarousel" data-bs-ride="true" data-bs-touch="true">
    <div class="owl-carousel" id="optionsSlider">
        @foreach($options as $option)
            <div class="option-item">
                <span>{{$option}}</span>
            </div>
        @endforeach
    </div>
</div>
@push('scripts')
    <script>
        const options = {
            items: 2,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            dots: true,
            nav: false,
            responsive: {
                0: {
                    items: 2,
                    dots: true,
                    nav: false,
                },
                576: {
                    items: 3,
                    dots: true,
                    nav: false,
                },
                768: {
                    items: 4,
                    dots: true,
                    nav: false,
                },
                992: {
                    items: 4,
                    dots: true,
                    nav: false,
                },
                1200: {
                    items: 4,
                    dots: true,
                    nav: false,
                }
            },
        }
        $(function() {
            $("#optionsSlider").owlCarousel(options);
        });
    </script>
@endpush
