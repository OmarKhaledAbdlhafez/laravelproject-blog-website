@extends("layout.mater")
@section('content')

    <h1 class="my-4">New Post</h1>
    <form method="post" >
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">title</label>
            <input type="text" class="form-control" name="title" id="title" >
        </div>
        <div class="form-group">
            <label for="body">body</label>
            <textarea name="body" id="body" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Publish</button>
    </form>
    @include('layout.diplayerror')
    @endsection