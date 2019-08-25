<!-- Blog Post -->
@extends("layout.mater")
    @section("content")
       @foreach($posts as $post)
          @include('layout.posts')
        @endforeach

@endsection