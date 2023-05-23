<div>
    <div class="clean-heading text-center px-3 px-md-0 pt-5 pb-9">
        <h1>Diferente do tradicional</h1>
        <h4>Veja o que nossos investidores falam sobre nós.</h4>
    </div>
    <div class="container">
        <div class="owl-carousel" id="socialProofCarousel">
            @forelse($testimonials as $testimonial)
                    <div class="card testimonial-card">
                        <div class="profile">
                            <div class="avatar w-50 mx-auto pb-2">
                                <img class="img-fluid rounded-circle" src="{{$testimonial['profile_photo']}}" alt="">
                            </div>
                            <div class="name">
                                <h5 class="mb-0 fw-bold">{{$testimonial['name']}}</h5>
                                <h6 class="fw-bold text-ebw-golden">{{$testimonial['company']}}</h6>
                            </div>
                        </div>
                        <div class="content">
                            <!--blockquote-->
                            <blockquote class="blockquote fst-italic">
                                <p>"{{$testimonial['testimonial']}}"</p>
                            </blockquote>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
    </div>
    <div class="clean-heading text-center py-9 px-3">
        <p class="fs-4 fw-lighter">O seu futuro e o futuro do seu patrimônio é você quem decide.</p>
        <a class="btn cta-btn border-ebw-golden text-black mt-4" href="{{route('cadastro')}}">Conquiste suas metas financeiras >>></a>
    </div>
</div>
@push('scripts')
    <script>
        const options = {
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            dots: true,
            nav: false,
            responsive: {
                0: {
                    items: 1,
                    dots: true,
                    nav: false,
                },
                576: {
                    items: 1,
                    dots: true,
                    nav: false,
                },
                768: {
                    items: 3,
                    dots: true,
                    nav: false,
                },
                992: {
                    items: 3,
                    dots: true,
                    nav: false,
                },
                1200: {
                    items: 3,
                    dots: true,
                    nav: false,
                }
            },
        }
        $(function() {
            $("#socialProofCarousel").owlCarousel(options);
        });
    </script>
@endpush
