@if(session()->has('message'))
    <div id="msg" class="alert alert-{{session()->get('type')}}">
        {{ session()->get('message') }}
    </div>
@endif
