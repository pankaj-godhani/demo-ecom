
@include('frontend.frontend_layout.body.style')
<body>
<div class="page-wrapper">
    @include('frontend.frontend_layout.body.header')
    <main class="main cart">
        <div class="page-header" style="background-color: #f9f8f4">
            <h1 class="page-title">My Profile</h1>
        </div>
        <nav class="breadcrumb-nav has-border">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{ route('dashboard') }}">Home</a></li>
                    <li><a href="{{ route('user.orders') }}">Order History</a></li>
                    <li><a href="{{ route('user.cancel-orders') }}">Return Orders</a></li>
                    <li><a href="{{ route('user.return-orders') }}">Cancel Orders</a></li>
                    <li>My Profile</li>
                </ul>
            </div>
        </nav>
        <div class="page-content">
            <div class="container pt-8 pb-10">
                <div class="col-lg-8 mx-auto pl-6 pr-6 pb-9">
                    <div class="container">
                        <form action="{{ route('user.profile') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <img id="show-image" class="rounded-circle mb-2"
                                 src="{{ !empty($user->profile_photo_path) ? url('storage/profile-photos/'.$user->profile_photo_path) : url('storage/profile-photos/blank_profile_photo.jpg') }}"
                                 alt="User Avatar" width="100px" height="100px" style=" border-radius: 50%" >
                            <div class="form-group mb-2">
                                <h5>Profile Picture <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="file" name="image" id="image" class="form-control">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label class="info-title" for="exampleInputname"> Name <span>*</span></label>
                                <input type="text" name="name" class="form-control unicase-form-control text-input"
                                       id="exampleInputname" value="{{ $user->name }}">
                            </div>
                            @error('name')
                            <span class="alert text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group mb-2">
                                <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                                <input type="email" name="email" class="form-control unicase-form-control text-input"
                                       id="exampleInputEmail1" value="{{ $user->email }}">
                            </div>
                            @error('email')
                            <span class="alert text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group mb-2">
                                <label class="info-title" for="exampleInputEmail1">Phone Number <span>*</span></label>
                                <input type="text" name="phone_number"
                                       class="form-control unicase-form-control text-input" id="exampleInputEmail1"
                                       value="{{ $user->phone_number }}">
                            </div>
                            @error('phone_number')
                            <span class="alert text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group mb-2">
                                <label class="info-title" for="address">Address <span>*</span></label>
                                <input type="text" name="address"
                                       class="form-control unicase-form-control text-input" id="address"
                                       value="{{ $user->address }}">
                            </div>
                            @error('address')
                            <span class="alert text-danger">{{ $message }}</span>
                            @enderror


                            <br>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-rounded btn-primary mb-5 ">Update Profile</button>
                                <a href="{{ route('user.change.password') }}" style="float: right;" class="btn btn-rounded btn-primary mb-5">Change Password</a>
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

<script type="text/javascript">
            $(document).ready(function(){
            $('#image').change(function(e){
                let reader = new FileReader();
                reader.onload = function(e){
                    $('#show-image').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
</script>

</body>

</html>










