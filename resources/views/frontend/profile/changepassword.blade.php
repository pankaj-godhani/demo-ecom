
@include('frontend.frontend_layout.body.style')
<body>
<div class="page-wrapper">
    @include('frontend.frontend_layout.body.header')
    <main class="main cart">
        <div class="page-header" style="background-color: #f9f8f4">
            <h1 class="page-title">Change Password</h1>
        </div>
        <nav class="breadcrumb-nav has-border">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{ route('dashboard') }}">Home</a></li>
                    <li><a href="{{ route('user.profile') }}">My Profile</a></li>
                    <li><a href="{{ route('user.orders') }}">Order History</a></li>
                    <li><a href="{{ route('user.cancel-orders') }}">Return Orders</a></li>
                    <li><a href="{{ route('user.return-orders') }}">Cancel Orders</a></li>

                    <li>Change Password</li>
                </ul>
            </div>
        </nav>
        <div class="page-content">
            <div class="container pt-8 pb-10">
                <div class="col-lg-8 mx-auto pl-6 pr-6 pb-9">
                    <div class="container">
                        <form action="{{ route('user.update.password') }}" method="post">
                                @csrf
                                    <div class="form-group mb-2">
                                        <h5>Current Password Field <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="password" name="current_password" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                        </div>
                                        @error('current_password')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-2">
                                        <h5>New Password Input Field <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="password" name="password" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                        </div>
                                        @error('password')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-2">
                                        <h5>Confirm Password Input Field <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="password" name="password_confirmation" data-validation-match-match="password" class="form-control" required=""> <div class="help-block"></div>
                                        </div>
                                        @error('password_confirmation')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="text-xs-right">
                                        <button type="submit" class="btn btn-rounded btn-primary mb-5">Update Password</button>
                                    </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('frontend.frontend_layout.body.footer')
</div>

@include('frontend.frontend_layout.body.script')

</body>
<!-- Mirrored from d-themes.com/html/panda/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Mar 2022 10:15:23 GMT -->
</html>
