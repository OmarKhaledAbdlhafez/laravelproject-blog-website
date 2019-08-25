<div class="card-body">
    <h1 class="card-title">
        <a href="post/{{$post->id}}">
            {{$post->title}}
        </a>
    </h1>
    {{$post->user->name}}
    on
    {{$post->created_at}}
    <div class="card-footer text-muted">

        <p class="card-text">{{$post->body}}</p>
    </div>

</div>
