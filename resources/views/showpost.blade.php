@extends("layout.mater")
@section("content")
    <div class="card-body">
        <h1 class="card-title">
            {{$post->title}}
        </h1>
        <hr>
        {{$post->created_at}}
        <div class="card-footer text-muted">
            <p class="card-text">{{$post->body}}</p>
        </div>
        <div class="glyphicon-comment">
            <ul class="list-group">
                    @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        {{$comment->body}}
                    </li>
                        @endforeach

            </ul>
        </div>
        <br>
        <div class="card">
            <div class="card-block">
            <form class="form-group" method="post" action="{{$post->id}}">
                {{csrf_field()}}
                <div class="form-group">
                <textarea name="body" placeholder="add ur comment" class="form-control">
                </textarea>
                </div>
                <button type="submit" class="btn btn-primary">add commemt</button>
            </form>
            </div>
        </div>

    </div>

@endsection