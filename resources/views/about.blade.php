@extends("layouts.master")
@section("title", "About")
@section("content")
    <div class="row tm-row tm-mb-45">
        <div class="col-12">
            <hr class="tm-hr-primary tm-mb-55">
            <img src={{$about->image_path}} alt="Image" class="img-fluid">
        </div>
    </div>
    <div class="row tm-row tm-mb-40">
        <div class="col-12">
            <div class="mb-4">
                <h2 class="pt-2 tm-mb-40 tm-color-primary tm-post-title">{{$about->title}}</h2>
                {!! $about->description !!}
            </div>
        </div>
    </div>

@endsection

