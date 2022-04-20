@extends('admin.admin_master')

@section('dashboard_content')
    @include('admin.dashboard_layout.breadcrumb', [
    'name' => 'admindetails',
    'url' => "admindetails.index",
    'section_name' => 'admindetails'
    ])
    <section class="content">
        <div class="row">
            {{-- Edit Coupon Page --}}
            <div class="col-md-8 col-lg-8 offset-2">
                <div class="box">
                    <div class="box-header with-border d-flex justify-content-between align-items-center">
                        <h3 class="box-title">Edit Admin Details</h3>
                        <a href="{{ route('admindetails.index') }}" class="btn btn-primary">Back Admin Details</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('admindetails.update', $admindetail) }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <h5>Company Name <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="company_name" class="form-control" required="" value="{{ old('company_name', $admindetail->company_name) }}" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                </div>
                                @error('company_name')
                                <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h5>Address<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="address" class="form-control" required="" value="{{ old('address', $admindetail->address) }}" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                </div>
                                @error('address')
                                <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h5>Phone<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="phone" class="form-control" required="" value="{{ old('phone', $admindetail->phone) }}" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                </div>
                                @error('phone')
                                <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h5>State<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="state" class="form-control" required="" value="{{ old('state', $admindetail->state) }}" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                </div>
                                @error('state')
                                <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h5>City<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="city" class="form-control" required="" value="{{ old('city', $admindetail->city) }}" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                </div>
                                @error('city')
                                <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h5>Post Code<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="post_code" class="form-control" required="" value="{{ old('post_code', $admindetail->post_code) }}" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                </div>
                                @error('post_code')
                                <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-rounded btn-info">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
