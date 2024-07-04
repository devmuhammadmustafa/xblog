@extends("admin.layouts.master")
@push("js")
    <script src="/global_assets\js\plugins\tables\datatables\datatables.min.js"></script>
    <script src="/global_assets\js\demo_pages\datatables_basic.js"></script>
@endpush

@section("content")
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Basic datatable</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            The <code>DataTables</code> is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table. DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function. Searching, ordering, paging etc goodness will be immediately added to the table, as shown in this example. <strong>Datatables support all available table styling.</strong>
        </div>

        <table class="table datatable-basic">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Email</th>
                <th>Image</th>
                <th>Status</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td><a href="mailto:{{$user->email}}">{{$user->email}}</a></td>
                    <td>{{$user->image}}</td>

                    <td><span class="badge badge-{{$user->is_active ? "success" : "danger"}}">{{$user->is_active ? "active" : "block"}}</span></td>
                    <td class="text-center">
                        <div class="list-icons">

                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
