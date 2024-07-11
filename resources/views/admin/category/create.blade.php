@extends("admin.layouts.master")
@push("js")
    <script src="/global_assets\js\plugins\forms\selects\select2.min.js"></script>
    <script src="/global_assets\js\plugins\forms\styling\uniform.min.js"></script>
    <script src="/global_assets\js\demo_pages\form_layouts.js"></script>

    <script src="/global_assets\js\demo_pages\form_select2.js"></script>
@endpush

@section("content")
    <div class="row">
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
                    @include("admin.partials.message")
                    <form action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Title:</label>
                            <input type="text" class="form-control" name="title" >
                        </div>
                        <div class="form-group">
                            <label>Parent Category</label>
                            <select class="form-control select" data-fouc="" name="parent_id">
                                <option value="0">Main</option>
                                @foreach($categories as $category)

                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit form</button>
                        </div>

                    </form>
                </div>
            </div>
            <!-- /basic layout -->

        </div>
    </div>
@endsection
