<div class="card person-card">
    <div class="card-header">
        <div class="img-container" style="background: url({{$img}})">
            <div class="social-media">
                <a href="" class="btn btn-social-media rounded-circle"><x-ri-linkedin-fill /></a>
                <a href="" class="btn btn-social-media rounded-circle"><x-ri-twitter-fill /></a>
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
