<div class="hero-carousel-slider">
    <div id="heroSliderCarousel" class="carousel slide carousel-fade" data-bs-ride="true" data-bs-touch="true">
        <div class="carousel-indicators">
            @for($i = 0; $i < count($slides); $i++)
                <button type="button" data-bs-target="#heroSliderCarousel" data-bs-slide-to="{{$i}}" class="{{$i === 0 ? 'active' : ''}}" aria-current="{{$i === 0 ? 'true' : 'false'}}" aria-label="Slide {{$i}}"></button>
            @endfor
        </div>
        <div class="carousel-inner">
            @foreach($slides as $slide)
                <div class="carousel-item slide {{$loop->first ? 'active' : ''}}" style="background: url({{$slide->cover}});">
                    <div class="slide-content w-100">
                        <div class="slide-heading w-md-50">
                            <h1>{{$slide->title}}</h1>
                        </div>

                        @if(!empty($slide->overlay_url && !empty($slide->overlay_caption)))
                            <div class="slide-overlay pe-4 pe-md-0 w-md-60">
                                <figure class="figure">
                                    <img src="{{$slide->overlay_url}}" class="figure-img img-fluid rounded" alt="...">
                                    <figcaption class="figure-caption text-white text-center">{{$slide->overlay_caption}}</figcaption>
                                </figure>
                            </div>
                        @endif

                        <div class="slide-body w-md-30">
                            <p>{{$slide->description}}</p>
                        </div>

                        <div class="slide-footer w-md-30">
                            <a href="{{$slide->link}}" class="btn border-ebw-golden text-white cta-btn">{{$slide->call_to_action}} >>></a>
                        </div>
                    </div>
                </div>
            @endforeach


            {{--@for($i = 0; $i < count($slides); $i++)
                <div class="carousel-item slide {{$i === 0 ? 'active' : ''}}" style="background: url({{asset('assets/png/slider/'.$slides[$i]->cover)}});">
                    <div class="slide-content">
                        <h1>{{$slides[$i]->title}}</h1>
                        <p>{{$slides[$i]->description}}</p>
                        <a href="{{$slides[$i]->link}}" class="btn border-ebw-golden rounded-pill text-white">{{$slides[$i]->call_to_action}} >>></a>
                    </div>
                </div>
            @endfor--}}
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroSliderCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroSliderCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
