@if(count($errors))
    
    <div class="alert alert-denger">

        @foreach($errors->all() as $error)
            <div>{{$error}}</div>
        @endforeach
    </div>


@endif