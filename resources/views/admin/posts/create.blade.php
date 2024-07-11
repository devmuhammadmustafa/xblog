@extends("admin.layouts.master")
@push('js')
    <script src="/global_assets\js\plugins\forms\selects\select2.min.js"></script>
    <script src="/global_assets\js\plugins\forms\styling\uniform.min.js"></script>
    <script src="/global_assets\js\demo_pages\form_layouts.js"></script>

    <script src="/global_assets\js\plugins\forms\selects\bootstrap_multiselect.js"></script>
    <script src="/global_assets\js\demo_pages\form_multiselect.js"></script>
    <script src="/global_assets\js\plugins\editors\summernote\summernote.min.js"></script>
    <script src="/global_assets\js\demo_pages\editor_summernote.js"></script>
@endpush
@section("content")
    <div class="col-md-12">

        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Post Create</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                @include('admin.partials.message')
                <form action="{{route("admin.posts.store")}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Title:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="title" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Description:</label>
                        <div class="col-lg-9">
                            <textarea class="form-control summernote" name="description"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Categories:</label>
                        <div class="col-lg-9">
                            <select class="form-control multiselect" multiple="multiple" name="categories[]" data-fouc="">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Your avatar:</label>
                        <div class="col-lg-9">
                            <input type="file" class="form-input-styled" name="image" data-fouc="">
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /basic layout -->

    </div>
@endsection
