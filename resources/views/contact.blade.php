@extends("layouts.master")
@section("title", "Contact")
@section("content")
    <div class="row tm-row tm-mb-45">
        <div class="col-12">
            <hr class="tm-hr-primary tm-mb-55">
            <div class="gmap_canvas"> <!-- Google Map -->
                <iframe width="100%" height="477" id="gmap_canvas"
                        src="{{$setting->map}}"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>
    <div class="row tm-row tm-mb-120">
        <div class="col-12">
            <h2 class="tm-color-primary tm-post-title tm-mb-60">Contact Us</h2>
        </div>
        <div class="col-lg-7 tm-contact-left">
            @include('partials.message')
            <form method="POST" action="{{route("contact.store")}}" class="mb-5 ml-auto mr-0 tm-contact-form">
                @csrf
                <div class="form-group row mb-4">
                    <label for="name" class="col-sm-3 col-form-label text-right tm-color-primary">Name {{$setting->site_name}}</label>
                    <div class="col-sm-9">
                        <input class="form-control mr-0 ml-auto" name="name" id="name" type="text" required>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="email" class="col-sm-3 col-form-label text-right tm-color-primary">Email</label>
                    <div class="col-sm-9">
                        <input class="form-control mr-0 ml-auto" name="email" id="email" type="email" required>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="subject" class="col-sm-3 col-form-label text-right tm-color-primary">Subject</label>
                    <div class="col-sm-9">
                        <input class="form-control mr-0 ml-auto" name="title" id="subject" type="text" required>
                    </div>
                </div>
                <div class="form-group row mb-5">
                    <label for="message" class="col-sm-3 col-form-label text-right tm-color-primary">Message</label>
                    <div class="col-sm-9">
                        <textarea class="form-control mr-0 ml-auto" name="message" id="message" rows="8" required></textarea>
                    </div>
                </div>
                <div class="form-group row text-right">
                    <div class="col-12">
                        <button class="tm-btn tm-btn-primary tm-btn-small">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-5 tm-contact-right">
            <address class="mb-4 tm-color-gray">
                {{$setting->address}}
            </address>
            <span class="d-block">
                        Tel:
                        <a href="tel:{{$setting->phone}}" class="tm-color-gray">{{$setting->phone}}</a>
                    </span>
            <span class="mb-4 d-block">
                        Email:
                        <a href="mailto:{{$setting->email}}" class="tm-color-gray">{{$setting->email}}</a>
                    </span>
            <p class="mb-5 tm-line-height-short">
                {{$setting->contact_info}}
            </p>
            <ul class="tm-social-links">
                <li class="mb-2">
                    <a href="{{$setting->facebook}}" class="d-flex align-items-center justify-content-center">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="{{$setting->twitter}}" class="d-flex align-items-center justify-content-center">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="{{$setting->youtube}}" class="d-flex align-items-center justify-content-center">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="{{$setting->instagram}}" class="d-flex align-items-center justify-content-center mr-0">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection

@push("js")
    <script>
        setTimeout(() => {
            document.getElementById("message").style.display = "none"
        }, 2000)
    </script>
@endpush

