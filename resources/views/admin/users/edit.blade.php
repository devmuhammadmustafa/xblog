@extends("admin.layouts.master")
@push('js')
    <script src="/global_assets\js\plugins\forms\selects\select2.min.js"></script>
    <script src="/global_assets\js\plugins\forms\styling\uniform.min.js"></script>
    <script src="/global_assets\js\demo_pages\form_layouts.js"></script>
@endpush
@section("content")
    <div class="col-md-12">

        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">User Edit({{$user->email}})</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="#">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Name:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="Eugene Kopyov">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Email:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="email" value="{{$user->email}}" placeholder="test@mail.ru">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Password:</label>
                        <div class="col-lg-9">
                            <input type="password" class="form-control" name="password" placeholder="Your strong password">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Status:</label>
                        <div class="col-lg-9">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-input-styled" name="is_active" checked value="1" {{$user->is_active==1 ? "checked" : ""}} data-fouc="">
                                    Active
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-input-styled" name="is_active" value="0" {{$user->is_active==0 ? "checked" : ""}} data-fouc="">
                                    Passive
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Is Admin:</label>
                        <div class="col-lg-9">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-input-styled" name="is_admin" {{$user->is_admin==1 ? "checked" : ""}}  value="1" data-fouc="">
                                    Admin
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-input-styled" name="is_admin" value="0" {{$user->is_admin==0 ? "checked" : ""}} data-fouc="">
                                    User
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-lg-3 col-form-label">Your avatar: <div class="mr-3">

                                <img src="{{$user->image_path}}" width="60" height="60" class="rounded-round" alt="">

                            </div></label>
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
