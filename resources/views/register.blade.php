@extends("layout.mater")
@section("content")
    <h1>register</h1>
    <form method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="ur name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="mail" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1"
                   name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password_conformation" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        @include('layout.diplayerror')
    </form>
@endsection