@if(session()->has('error'))
    <div class="alert alert-danger my-3" style="
            top: 77px;
            margin-left: 278px;
        "
         role="alert">
        {{session('error')}}
    </div>
@elseif(session()->has('success'))
    <div class="alert alert-success" style="
            top: 77px;
            margin-left: 278px;
        " role="alert">
        {{session('success')}}
    </div>
@endif
