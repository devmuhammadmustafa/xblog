@extends("admin.layouts.master")
@push("js")
    <script src="/global_assets\js\plugins\forms\selects\select2.min.js"></script>
    <script src="/global_assets\js\plugins\forms\styling\uniform.min.js"></script>
    <script src="/global_assets\js\demo_pages\form_layouts.js"></script>
@endpush

@section("content")
    <div class="row">
        <div class="col-md-12">

            <!-- Basic layout-->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">User Edit</h5>
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
                    <form action="{{route('admin.user.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" value="{{$user->name}}" name="name" placeholder="Eugene Kopyov">
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="text" class="form-control" value="{{$user->email}}" name="email" placeholder="test@mail.ru">
                        </div>

                        <div class="form-group">
                            <label>Password:</label>
                            <input type="password" class="form-control" placeholder="Your strong password">
                        </div>

                        <div class="form-group">
                            <label class="d-block">Status:</label>

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-input-styled" value="1" {{$user->is_active == 1 ? 'checked' : ''}} name="is_active"  data-fouc="">
                                    Active
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-input-styled" value="0" name="is_active" {{$user->is_active == 0 ? 'checked' : ''}} data-fouc="">
                                    Passive
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="d-block">Is Admin:</label>

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-input-styled" value="1" name="is_admin" {{$user->is_admin == 1 ? 'checked' : ''}} data-fouc="">
                                    Admin
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-input-styled" value="0" name="is_admin" {{$user->is_active == 0 ? 'checked' : ''}} data-fouc="">
                                    User
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Your avatar:</label>
                            <input type="file" class="form-input-styled" name="image" data-fouc="">
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
