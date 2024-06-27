@if(session()->has('message'))
    <div class="alert alert-{{session()->get('type')}}">
        {{ session()->get('message') }}
    </div>
@endif
