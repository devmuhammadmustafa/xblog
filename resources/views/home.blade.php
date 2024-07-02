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
                    <span class="position-absolute tm-new-badge">{{Helper::diffDays($post->created_at->timestamp)}}</span>
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
                    <span>by {{$post->user->name}}</span>
                </div>
            </article>
        @endforeach
    </div>
    <div class="row tm-row tm-mt-100 tm-mb-75">
        <div class="tm-prev-next-wrapper">
            <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
            <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
        </div>
        <div class="tm-paging-wrapper">
            <span class="d-inline-block mr-3">Page</span>
            <nav class="tm-paging-nav d-inline-block">
                <ul>
                    <li class="tm-paging-item active">
                        <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                    </li>
                    <li class="tm-paging-item">
                        <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
                    </li>
                    <li class="tm-paging-item">
                        <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
                    </li>
                    <li class="tm-paging-item">
                        <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
