@extends('admin.admin_master')

@section('dashboard_content')
    @include('admin.dashboard_layout.breadcrumb', [
   'name' => 'extracharge',
    'url' => "extracharge.index",
    'section_name' => 'extracharge'
    ])
    <section class="content">
        <div class="row">
            {{-- Edit Coupon Page --}}
            <div class="col-md-8 col-lg-8 offset-2">
                <div class="box">
                    <div class="box-header with-border d-flex justify-content-between align-items-center">
                        <h3 class="box-title">Edit New ExtraCharge</h3>
                        <a href="{{ route('extracharge.index') }}" class="btn btn-primary">Back List ExtraCharge</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('extracharge.update',$extras) }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <h5>ExtraCharge <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="extra_charge" class="form-control" required="" value="{{ old('extra_charge', $extras->extra_charge) }}" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                </div>
                                @error('extra_charge')
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
