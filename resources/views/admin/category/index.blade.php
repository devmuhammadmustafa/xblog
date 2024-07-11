@extends("admin.layouts.master")

@push('js')
    <script src="/global_assets\js\plugins\tables\datatables\datatables.min.js"></script>
    <script src="/global_assets\js\plugins\tables\datatables\extensions\responsive.min.js"></script>
    <script src="/global_assets\js\demo_pages\datatables_responsive.js"></script>
@endpush
@section("content")
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Category List</h5>
            <div class="header-elements">
                <a href="{{route("admin.category.create")}}" class="dt-button buttons-pdf buttons-html5 btn bg-teal-400" tabindex="0" aria-controls="DataTables_Table_1" type="button"><span>Create Category</span></a>
            </div>
        </div>

        @include("admin.partials.message")
        <table class="table datatable-responsive">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Parent Category</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)

                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>{{$category->slug}}</td>
                    <td>{{$category->parent?->title ? $category->parent?->title : "Main"}}</td>
                    <td class="text-center">
                        <div class="list-icons">
                            <a href="{{route("admin.category.edit", $category->id)}}" class="dropdown-item"><i class="icon-database-edit2"></i></a>
                            <a href="{{route("admin.category.delete", $category->id)}}" class="dropdown-item"><i class="icon-trash"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
