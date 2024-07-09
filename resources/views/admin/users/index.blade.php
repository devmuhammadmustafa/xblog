@extends("admin.layouts.master")
@push("js")
    <script src="/global_assets\js\plugins\tables\datatables\datatables.min.js"></script>
    <script src="/global_assets\js\demo_pages\datatables_basic.js"></script>
@endpush

@section("content")
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">User lists</h5>
            <div class="header-elements">
                <a href="{{route('admin.user.create')}}" type="button" class="btn btn-primary">Default button</a>
            </div>
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
                            <div class="dropdown">
                                <a href="{{route("admin.user.edit", $user->id)}}" class="list-icons-item" data-toggle="dropdown" aria-expanded="false">
                                    <i class="icon-database-edit2"></i>
                                </a>
                                <a href="{{route("admin.user.delete", $user->id)}}" class="list-icons-item" data-toggle="dropdown" aria-expanded="false">
                                    <i class="icon-trash"></i>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
