@if(session()->has('message'))
    <div id="message" class="alert alert-{{session()->get('type')}}">
        {{ session()->get('message') }}
    </div>
@endif
