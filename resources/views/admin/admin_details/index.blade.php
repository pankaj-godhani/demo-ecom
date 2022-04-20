
@extends('admin.admin_master')

@section('dashboard_content')
    @include('admin.dashboard_layout.breadcrumb', [
    'name' => 'admindetails',
    'url' => "admindetails.index",
    'section_name' => 'admindetails'
    ])
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="box">
                    <div class="box-header with-border d-flex justify-content-between align-items-center">
                        <h3 class="box-title">Admin Details</h3>
                        <a href="{{ route('admindetails.create') }}" class="btn btn-primary">Create New Admin Details</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1" class="table table-bordered table-striped dataTable"
                                               role="grid" aria-describedby="example1_info">
                                            <thead>
                                            <tr role="row">
                                                <th>Id</th>
                                                <th>Company Name </th>
                                                <th>Address </th>
                                                <th>Phone </th>
                                                <th>State </th>
                                                <th>City </th>
                                                <th>Post Code </th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($admindetail as $item)
                                                <tr role="row" class="odd">
                                                    <td>{{ $loop->index+1 }}</td>
                                                    <td>{{ $item->company_name }}</td>
                                                    <td>{{ $item->address }}</td>
                                                    <td>{{ $item->phone }}</td>
                                                    <td>{{ $item->state }}</td>
                                                    <td>{{ $item->city }}</td>
                                                    <td>{{ $item->post_code }}</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <a href="{{ route('admindetails.edit', $item) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                                            <form action="{{ route('admindetails.destroy', $item) }}" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <a href="" class="btn btn-danger" title="Delete Data" id="delete" onclick="event.preventDefault();
                                                                this.closest('form').submit();"><i class="fa fa-trash"></i></a>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@section('dashboard_script')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
        $(function() {
            $('.toggle-class').change(function() {
                // var status = $(this).prop('checked') == true ? 1 : 0;
                var extracharge_id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/admin/change/extracharge/status',
                    data: {'status': status, 'extracharge_id': extracharge_id},
                    success: function(data){
                        console.log(data.success)
                    }
                });
            })
        })
    </script>
@endsection
@endsection
