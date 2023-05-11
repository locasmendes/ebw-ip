<div class="card person-card">
    <div class="card-header">
        <div class="img-container" style="background: url({{$img}})">
            <div class="social-media">
                @if($socialNetworks['linkedin'])
                    <a href="{{$socialNetworks['linkedin']}}" class="btn btn-social-media rounded-circle" target="_blank"><x-ri-linkedin-fill /></a>
                @endif
                @if($socialNetworks['twitter'])
                    <a href="{{$socialNetworks['twitter']}}" class="btn btn-social-media rounded-circle" target="_blank"><x-ri-twitter-fill /></a>
                @endif
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="person-info">
            <h3>{{$fullName}}</h3>
            <span>{{$position}}</span>
        </div>
        <hr>
        <div>
            <p>{{$description}}</p>
            <blockquote class="blockquote">
                <p>{{$quote}}</p>
            </blockquote>
        </div>
    </div>
</div>
