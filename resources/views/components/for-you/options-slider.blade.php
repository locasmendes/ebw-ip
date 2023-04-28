<div class="options-slider carousel slide" id="optionsCarousel" data-bs-ride="true" data-bs-touch="true">
    <div class="carousel-inner">
        @for($i = 0; $i < count($chunks); $i++)
            <div class="option-chunk carousel-item slide {{$i === 0 ? 'active' : ''}}">
                @foreach($chunks[$i] as $option)
                    <div class="option-item">
                        <span>{{$option}}</span>
                    </div>
                @endforeach
            </div>
        @endfor
    </div>
    <div class="carousel-indicators py-3">
        @for($i = 0; $i < count($chunks); $i++)
            <button type="button" data-bs-target="#optionsCarousel" data-bs-slide-to="{{$i}}" class="{{$i === 0 ? 'active' : ''}}" aria-current="{{$i === 0 ? 'true' : 'false'}}" aria-label="Slide {{$i}}"></button>
        @endfor
    </div>
</div>
