<div class="hero-carousel-slider">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="true" data-bs-touch="true">
        <div class="carousel-indicators">
            @for($i = 0; $i < count($slides); $i++)
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$i}}" class="{{$i === 0 ? 'active' : ''}}" aria-current="{{$i === 0 ? 'true' : 'false'}}" aria-label="Slide {{$i}}"></button>
            @endfor
        </div>
        <div class="carousel-inner">
            @foreach($slides as $slide)
                <div class="carousel-item slide {{$loop->first ? 'active' : ''}}" style="background: url({{asset('assets/png/slider/'.$slide['cover'])}});">
                    <div class="slide-content">
                        <h1>{{$slide['title']}}</h1>
                        <p>{{$slide['description']}}</p>
                        <a href="{{$slide['link']}}" class="btn border-ebw-golden rounded-pill text-white">{{$slide['call_to_action']}} >>></a>
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
    </div>
</div>
