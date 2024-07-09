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
                <a href="{{route("admin.users.create")}}" class="dt-button buttons-pdf buttons-html5 btn bg-teal-400" tabindex="0" aria-controls="DataTables_Table_1" type="button"><span>Create Users</span></a>
            </div>
        </div>


        <table class="table datatable-responsive">
            <thead>
            <tr>
                <th>#</th>
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
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td><a href="mailto:{{$user->name}}">{{$user->email}}</a></td>
                    <td>
                        <div class="mr-3">

                            <img src="{{$user->image_path}}" width="60" height="60" class="rounded-round" alt="">

                        </div>
                    </td>
                    <td><span class="badge badge-{{$user->is_active == 1 ? "success" : "danger"}}">{{$user->is_active == 1 ? "Active" : "Passive"}}</span></td>
                    <td class="text-center">
                        <div class="list-icons">
                            <a href="{{route("admin.users.edit", $user->id)}}" class="dropdown-item"><i class="icon-database-edit2"></i></a>
                            <a href="{{route("admin.users.delete", $user->id)}}" class="dropdown-item"><i class="icon-trash"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
