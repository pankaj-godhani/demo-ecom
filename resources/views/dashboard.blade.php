
@include('frontend.frontend_layout.body.style')
<body>
<div class="page-wrapper">
    @include('frontend.frontend_layout.body.header')
    <main class="main cart">
        <div class="page-header" style="background-color: #f9f8f4">
            <h1 class="page-title"> Welcome To {{ env('APP_NAME') }} <strong>{{ Auth::user()->name }}</strong></h1>
        </div>
        <nav class="breadcrumb-nav has-border">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{ route('dashboard') }}">Home</a></li>
                    <li><a href="{{ route('user.profile') }}">My Profile</a></li>
                    <li><a href="{{ route('user.orders') }}">Order History</a></li>
                    <li><a href="{{ route('user.return-orders') }}">Return Orders</a></li>
                    <li><a href="{{ route('user.cancel-orders') }}">Cancel Orders</a></li>
                </ul>
            </div>
        </nav>
        <div class="page-content">
            <div class="container pt-8 pb-10">
                <div class="col-lg-8 mx-auto pl-6 pr-6 pb-9">
                    <div class="container">

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

