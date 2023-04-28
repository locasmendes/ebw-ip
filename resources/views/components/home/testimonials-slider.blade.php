<div>
    <div class="clean-heading text-center pt-5 pb-9">
        <h3 class="fs-1">Diferente do tradicional</h3>
        <p>Veja o que nossos investidores falam sobre nós.</p>
    </div>
    <div id="socialProofCarousel" class="carousel container slide" data-bs-ride="true">
        <div class="carousel-inner">
            @foreach($chunks as $chunk)
                <div class="carousel-item gap-4 {{$loop->first ? 'active' : ''}}">
                    @forelse($chunk as $testimonial)
                        <div class="card testimonial-card">
                            <div class="profile">
                                <div class="avatar w-50 mx-auto pb-2">
                                    <img class="img-fluid rounded-circle" src="{{$testimonial['profile_photo']}}" alt="">
                                </div>
                                <div class="name">
                                    <h4 class="mb-0">{{$testimonial['name']}}</h4>
                                    <span>{{$testimonial['company']}}</span>
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
            @endforeach
        </div>
        <div class="carousel-indicators">
            @foreach($chunks as $chunk)
                <button type="button" data-bs-target="#socialProofCarousel" data-bs-slide-to="{{$loop->index}}" class="{{$loop->first ? 'active' : ''}}" aria-current="true" aria-label="Slide {{$loop->index + 1}}"></button>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#socialProofCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#socialProofCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="clean-heading text-center py-9">
        <p>O seu futuro e o futuro do seu patrimônio é você quem decide.</p>
        <a class="btn border-ebw-golden rounded-pill text-black text-uppercase mt-4" href="">Conquiste suas metas financeiras >>></a>
    </div>
</div>
