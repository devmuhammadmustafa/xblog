@extends("layouts.master")
@section("title", "Home")
@section("content")
    <div class="row tm-row">
        @foreach($posts as $post)
            <article class="col-12 col-md-6 tm-post">
                <hr class="tm-hr-primary">
                <a href="{{route("post", [$post->slug])}}" class="effect-lily tm-post-link tm-pt-60">
                    <div class="tm-post-link-inner">
                        <img src="{{$post->image}}" alt="Image" class="img-fluid">
                    </div>

                    @if(Helper::differDate((int)$post->created_at->timestamp) <= 5)
                        <span class="position-absolute tm-new-badge">New</span>
                    @endif
                    <h2 class="tm-pt-30 tm-color-primary tm-post-title">{{$post->title}}</h2>
                </a>
                <p class="tm-pt-30">

                    {!! Str::limit($post->description, 180) !!}

                </p>
                <div class="d-flex justify-content-between tm-pt-45">
                    <span class="tm-color-primary">
                        @include("partials.category", ['categories' => $post->categories])
                    </span>
{{--                    June 24, 2020--}}
                    <span class="tm-color-primary">{{$post->created_at->format('M d, Y')}}</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <span>{{$post->comments->count()}} comments</span>
                    <span>by {{$post->user?->name}}</span>
                </div>
            </article>
        @endforeach
    </div>
    <div class="row tm-row tm-mt-100 tm-mb-75">


        {{ $posts->links() }}

    </div>
@endsection
