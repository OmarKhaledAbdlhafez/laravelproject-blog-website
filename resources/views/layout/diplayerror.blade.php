@if(count($errors))
<div class="form-group">
        <div class="alret alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
</div>
    @endif