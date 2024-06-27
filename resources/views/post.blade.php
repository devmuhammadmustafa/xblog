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
                    <span class="d-block text-right tm-color-primary">
                        @include("partials.category", ['categories' => $post->categories])
                    </span>
                </div>

                <!-- Comments -->
                <div>
                    <h2 class="tm-color-primary tm-post-title">Comments</h2>
                    <hr class="tm-hr-primary tm-mb-45">
                    <div class="tm-comment tm-mb-45">
                        <figure class="tm-comment-figure">
                            <img src="../assets/img/comment-1.jpg" alt="Image" class="mb-2 rounded-circle img-thumbnail">
                            <figcaption class="tm-color-primary text-center">Mark Sonny</figcaption>
                        </figure>
                        <div>
                            <p>
                                Praesent aliquam ex vel lectus ornare tritique. Nunc et eros
                                quis enim feugiat tincidunt et vitae dui. Nullam consectetur
                                justo ac ex laoreet rhoncus. Nunc id leo pretium, faucibus
                                sapien vel, euismod turpis.
                            </p>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="tm-color-primary">REPLY</a>
                                <span class="tm-color-primary">June 14, 2020</span>
                            </div>
                        </div>
                    </div>
                    <div class="tm-comment-reply tm-mb-45">
                        <hr>
                        <div class="tm-comment">
                            <figure class="tm-comment-figure">
                                <img src="../assets/img/comment-2.jpg" alt="Image" class="mb-2 rounded-circle img-thumbnail">
                                <figcaption class="tm-color-primary text-center">Jewel Soft</figcaption>
                            </figure>
                            <p>
                                Nunc et eros quis enim feugiat tincidunt et vitae dui.
                                Nullam consectetur justo ac ex laoreet rhoncus. Nunc
                                id leo pretium, faucibus sapien vel, euismod turpis.
                            </p>
                        </div>
                        <span class="d-block text-right tm-color-primary">June 21, 2020</span>
                    </div>
                    <form action="" class="mb-5 tm-comment-form">
                        <h2 class="tm-color-primary tm-post-title mb-4">Your comment</h2>
                        <div class="mb-4">
                            <input class="form-control" name="name" type="text">
                        </div>
                        <div class="mb-4">
                            <input class="form-control" name="email" type="text">
                        </div>
                        <div class="mb-4">
                            <textarea class="form-control" name="message" rows="6"></textarea>
                        </div>
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
                    <li><a href="#" class="tm-color-primary">Visual Designs</a></li>
                    <li><a href="#" class="tm-color-primary">Travel Events</a></li>
                    <li><a href="#" class="tm-color-primary">Web Development</a></li>
                    <li><a href="#" class="tm-color-primary">Video and Audio</a></li>
                    <li><a href="#" class="tm-color-primary">Etiam auctor ac arcu</a></li>
                    <li><a href="#" class="tm-color-primary">Sed im justo diam</a></li>
                </ul>
                <hr class="mb-3 tm-hr-primary">
                <h2 class="tm-mb-40 tm-post-title tm-color-primary">Related Posts</h2>
                <a href="#" class="d-block tm-mb-40">
                    <figure>
                        <img src="../assets/img/img-02.jpg" alt="Image" class="mb-3 img-fluid">
                        <figcaption class="tm-color-primary">Duis mollis diam nec ex viverra scelerisque a sit</figcaption>
                    </figure>
                </a>
                <a href="#" class="d-block tm-mb-40">
                    <figure>
                        <img src="../assets/img/img-05.jpg" alt="Image" class="mb-3 img-fluid">
                        <figcaption class="tm-color-primary">Integer quis lectus eget justo ullamcorper ullamcorper</figcaption>
                    </figure>
                </a>
                <a href="#" class="d-block tm-mb-40">
                    <figure>
                        <img src="../assets/img/img-06.jpg" alt="Image" class="mb-3 img-fluid">
                        <figcaption class="tm-color-primary">Nam lobortis nunc sed faucibus commodo</figcaption>
                    </figure>
                </a>
            </div>
        </aside>
    </div>
@endsection
