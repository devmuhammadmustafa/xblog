@extends("admin.layouts.master")

@push('js')
    <script src="/global_assets\js\plugins\tables\datatables\datatables.min.js"></script>
    <script src="/global_assets\js\plugins\tables\datatables\extensions\responsive.min.js"></script>
    <script src="/global_assets\js\demo_pages\datatables_responsive.js"></script>
@endpush
@section("content")
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Users List</h5>
            <div class="header-elements">
                <a href="{{route("admin.posts.create")}}" class="dt-button buttons-pdf buttons-html5 btn bg-teal-400" tabindex="0" aria-controls="DataTables_Table_1" type="button"><span>Create Posts</span></a>
            </div>
        </div>


        <table class="table datatable-responsive">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Slug</th>
                <th>User</th>
                <th>Category</th>
                <th>Image</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->slug}}</td>
                    <td>{{$post->user?->name}}</td>
                    <td>
                        @foreach($post->categories as $key=> $category)
                            {{$category->title}} {{$key+1 != $post->categories->count() ? ',' : ''}}
                        @endforeach
                    </td>
                    <td>
                        <div class="mr-3">

                            <img src="{{$post->image_path}}" width="60" height="60" class="rounded-round" alt="">

                        </div>
                    </td>
                    <td class="text-center">
                        <div class="list-icons">
                            <a href="{{route("admin.posts.edit", $post->id)}}" class="dropdown-item"><i class="icon-database-edit2"></i></a>
                            <a href="{{route("admin.posts.delete", $post->id)}}" class="dropdown-item"><i class="icon-trash"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
