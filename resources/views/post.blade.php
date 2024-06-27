@extends("layouts.master")
@section("title", "Post")
@section("content")
    <div class="row tm-row">
        <div class="col-12">
            <hr class="tm-hr-primary tm-mb-55">
           <img src="{{$post->image_path}}" />
        </div>
    </div>
    <div class="row tm-row">
        <div class="col-lg-8 tm-post-col">
            <div class="tm-post-full">
                <div class="mb-4">
                    <h2 class="pt-2 tm-color-primary tm-post-title">{{$post->title}}</h2>
                    <p class="tm-mb-40">June 16, 2020 posted by {{$post->user->name}}</p>
                    {!! $post->description !!}
{{--                    {{$post->description}}--}}
                    <span class="d-block text-right tm-color-primary">
                        @include("partials.category", ['categories' => $post->categories])
                    </span>
                </div>

                <!-- Comments -->
                <div>
                    <h2 class="tm-color-primary tm-post-title">Comments</h2>
                    <hr class="tm-hr-primary tm-mb-45">
                    @foreach($post->comments as $comment)
                    <div class="tm-comment tm-mb-45">
                        <figure class="tm-comment-figure">
                            <img src="{{$comment->user->image_path}}" alt="Image" class="mb-2 rounded-circle img-thumbnail">
                            <figcaption class="tm-color-primary text-center">{{$comment->user->name}}</figcaption>
                        </figure>
                        <div>
                            <p>
                                {{$comment->message}}
                            </p>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="tm-color-primary">REPLY</a>
                                <span class="tm-color-primary">{{$comment->created_at->format("M d Y")}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    @include("partials.message")
                    <form action="{{route("comment.store")}}" class="mb-5 tm-comment-form" method="post">
                        @csrf
                        <h2 class="tm-color-primary tm-post-title mb-4">Your comment</h2>
                        <div class="mb-4">
                            <textarea class="form-control" name="message" rows="6"></textarea>
                        </div>
                        <input type="hidden" name="post_id" value={{$post->id}} />
                        <input type="hidden" name="user_id" value="1" />
                        <div class="text-right">
                            <button class="tm-btn tm-btn-primary tm-btn-small">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <aside class="col-lg-4 tm-aside-col">
            <div class="tm-post-sidebar">
                <hr class="mb-3 tm-hr-primary">
                <h2 class="mb-4 tm-post-title tm-color-primary">Categories</h2>
                <ul class="tm-mb-75 pl-5 tm-category-list">
                    @foreach($categories as $category)
                        <li><a href="{{route("category", $category->slug)}}" class="tm-color-primary">{{$category->title}}</a></li>
                    @endforeach
                </ul>
                <hr class="mb-3 tm-hr-primary">
                <h2 class="tm-mb-40 tm-post-title tm-color-primary">Related Posts</h2>
                @foreach($latestPosts as $post)
                    <a href="{{route('post', $post->slug)}}" class="d-block tm-mb-40">
                        <figure>
                            <img src="{{$post->image_path}}" alt="Image" class="mb-3 img-fluid">
                            <figcaption class="tm-color-primary">{{$post->title}}</figcaption>
                        </figure>
                    </a>
                @endforeach


            </div>
        </aside>
    </div>
@endsection
