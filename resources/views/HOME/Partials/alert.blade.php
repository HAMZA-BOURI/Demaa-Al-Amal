
@if(session()->has('error'))
    <div class="alert alert-danger my-3" role="alert">
        {{session('error')}}
    </div>
@elseif(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
@endif
