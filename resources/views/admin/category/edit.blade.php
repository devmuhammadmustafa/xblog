@extends("admin.layouts.master")
@push('js')
    <script src="/global_assets\js\plugins\forms\selects\select2.min.js"></script>
    <script src="/global_assets\js\plugins\forms\styling\uniform.min.js"></script>
    <script src="/global_assets\js\demo_pages\form_layouts.js"></script>
    <script src="/global_assets\js\plugins\forms\selects\select2.min.js"></script>
    <script src="/global_assets\js\demo_pages\form_select2.js"></script>
@endpush
@section("content")
    <div class="col-md-12">

        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Category Create</h5>
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
                <form action="{{route("admin.category.update", $category->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Title:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="title" value="{{$category->title}}" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Parent Category:</label>
                        <div class="col-lg-9">
                            <select class="form-control select" data-fouc="" name="parent_id">
                                <option value="0">Main</option>
                                @foreach($categories as $category1)
                                    <option value="{{$category1->id}}" {{$category->parent_id == $category1->id ? 'selected' : ''}} >{{$category1->title}}</option>
                                @endforeach

                            </select>
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
