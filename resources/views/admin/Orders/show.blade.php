@extends('admin.admin_master')

@section('dashboard_content')
    @include('admin.dashboard_layout.breadcrumb', [
    'name' => 'Order Details',
    'url' => "orders.index",
    'section_name' => 'View Order'
    ])
    <section class="content">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="box box-bordered border-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Shipping Details</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 > From </h4>
                                </div>

                                <div class="card-body">
                                    <table class="table">
                                        <tr>
                                            <th> Shipping Name : </th>
                                            <th> {{ $order->name }} </th>
                                        </tr>

                                        <tr>
                                            <th> Shipping Phone : </th>
                                            <th> {{ $order->phone }} </th>
                                        </tr>

                                        <tr>
                                            <th> Shipping Email : </th>
                                            <th> {{ $order->email }} </th>
                                        </tr>

                                        <tr>
                                            <th> Division : </th>
                                            <th> {{ $order->division->division_name }} </th>
                                        </tr>

                                        <tr>
                                            <th> District : </th>
                                            <th> {{ $order->district->district_name }} </th>
                                        </tr>

                                        <tr>
                                            <th> State : </th>
                                            <th>{{ $order->state->state_name }} </th>
                                        </tr>

                                        <tr>
                                            <th> Post Code : </th>
                                            <th> {{ $order->post_code }} </th>
                                        </tr>

                                        <tr>
                                            <th> Order Date : </th>
                                            <th> {{ $order->order_date }} </th>
                                        </tr>
                                        <tr>
                                            <th> Order Number : </th>
                                            <th> {{ $order->order_number }} </th>
                                        </tr>

                                    </table>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>To </h4>
                                </div>

                                <div class="card-body">
                                    <table class="table">
                                        @foreach($admin as $ad)
                                            <tr>
                                                <th> Company Name : </th>
                                                <th> {{ $ad->company_name }} </th>
                                            </tr>

                                            <tr>
                                                <th> Address : </th>
                                                <th> {{ $ad->address }} </th>
                                            </tr>

                                            <tr>
                                                <th> Phone : </th>
                                                <th> {{ $ad->phone }} </th>
                                            </tr>

                                            <tr>
                                                <th> State : </th>
                                                <th> {{ $ad->state }} </th>
                                            </tr>

                                            <tr>
                                                <th> City : </th>
                                                <th> {{ $ad->city }} </th>
                                            </tr>

                                            <tr>
                                                <th> Post Code : </th>
                                                <th>{{ $ad->post_code }} </th>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-6 col-lg-6">
                <div class="box box-bordered border-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Order Details</h3>
                        <span class="text-danger" style="float: right; font-size:2rem;"> Invoice : {{ $order->invoice_number }}</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table">
                            <tr>
                                <th> Name :</th>
                                <th> {{ $order->user->name }} </th>
                            </tr>
                            <tr>
                                <th> Phone :</th>
                                <th> {{ $order->phone }} </th>
                            </tr>
                            <tr>
                                <th> Payment Type :</th>
                                <th> {{ $order->payment_method }} </th>
                            </tr>
                            @if($order->transaction_id)
                            <tr>
                                <th> Tranx ID :</th>
                                <th> {{ $order->transaction_id }} </th>
                            </tr>
                            @endif
                            <tr>
                                <th> Order ID :</th>
                                <th class="text-danger"> {{ $order->order_number }} </th>
                            </tr>
                            <tr>
                                <th> Order Total :</th>
                                <th>$ {{ $order->amount }} </th>
                            </tr>
                            <tr>
                                <th> Status :</th>
                                <th>

                                    @if($order->status=='cancel')
                                        <span class="badge badge-success">Return
                                                                        </span>
                                    @elseif($order == 'return')
                                        <span class="badge badge-success">Cancel
                                                                        </span>
                                    @else<span class="badge badge-success">{{ $order->status }}
                                                                        </span>
                                    @endif
                                </th>
                            </tr>
                            @if ($order->status == 'cancel')
                            <tr>
                                <th> Return Reason :</th>
                                <th>
                                        <a class="btn">{{ $order->return_reason }}</a>
                                        <br>

                                        <video id="my-video" class="video-js mb-5" controls preload="auto"
                                               width="400" height="200" data-setup="{}">
                                            <source src="{{asset($order->return_reason_video)}}"
                                                    type='video/mp4'>
                                        </video>
                                        <a href="{{ route('order-status.update', [
                                                                                        'order_id' => $order->id,
                                                                                        'status' => 'return'
                                                                                    ]) }}"
                                           class="btn btn-block btn-danger mb-5">Return Order</a>
                                </th>
                            </tr>
                            @endif
                            <tr>
                                <th>Change Status</th>

                                <th>
                                    <form action="{{route('order-status.update',[
                                                                            'order_id' => $order->id,
                                                                            'status' =>'Status Change Sucessfully'])}}" class="changestatus" method="GET"
                                          enctype="multipart/form-data">
                                        <select name="status" id="status1" class="form-control">
                                            <option>Select Status</option>
                                                <option value="pending" >Pending Order</option>
                                                <option value="processing">Process Order</option>
                                                <option value="picked">Pick Order</option>
                                                <option value="shipped">Ship Order</option>
                                                <option value="delivered">Deliverd Order</option>
                                        </select>
                                        <button type="submit" class="btn btn-primary mt-4">Change Status</button>
                                    </form>
{{--                                    @if ($order->status == 'pending')--}}
{{--                                        <a href="{{ route('order-status.update', [--}}
{{--                                                                            'order_id' => $order->id,--}}
{{--                                                                            'status' => 'confirmed'--}}
{{--                                                                        ]) }}" class="btn btn-block btn-success">Confirm--}}
{{--                                            Order</a>--}}
{{--                                    @elseif ($order->status == 'confirmed')--}}
{{--                                        <a href="{{ route('order-status.update', [--}}
{{--                                                                            'order_id' => $order->id,--}}
{{--                                                                            'status' => 'processing'--}}
{{--                                                                        ]) }}" class="btn btn-block btn-success">Process--}}
{{--                                            Order</a>--}}
{{--                                    @elseif ($order->status == 'processing')--}}
{{--                                        <a href="{{ route('order-status.update', [--}}
{{--                                                                            'order_id' => $order->id,--}}
{{--                                                                            'status' => 'picked'--}}
{{--                                                                        ]) }}" class="btn btn-block btn-success">Pick--}}
{{--                                            Order</a>--}}
{{--                                    @elseif ($order->status == 'picked')--}}
{{--                                        <a href="{{ route('order-status.update', [--}}
{{--                                                                            'order_id' => $order->id,--}}
{{--                                                                            'status' => 'shipped'--}}
{{--                                                                        ]) }}" class="btn btn-block btn-success">Ship--}}
{{--                                            Order</a>--}}
{{--                                    @elseif ($order->status == 'shipped')--}}
{{--                                        <a href="{{ route('order-status.update', [--}}
{{--                                                                            'order_id' => $order->id,--}}
{{--                                                                            'status' => 'delivered'--}}
{{--                                                                        ]) }}" class="btn btn-block btn-success">Deliverd--}}
{{--                                            Order</a>--}}
{{--                                    @elseif ($order->status == 'cancel')--}}
{{--                                        <a class="btn">{{ $order->return_reason }}</a>--}}
{{--                                        <br>--}}
{{--                                        <br>--}}
{{--                                        <video id="my-video" class="video-js" controls preload="auto" width="400"--}}
{{--                                               height="200" data-setup="{}">--}}
{{--                                            <source src="{{asset($order->return_reason_video)}}" type='video/mp4'>--}}
{{--                                        </video>--}}
{{--                                        <a href="{{ route('order-status.update', [--}}
{{--                                                                            'order_id' => $order->id,--}}
{{--                                                                            'status' => 'return'--}}
{{--                                                                        ]) }}" class="btn btn-block btn-danger">Return--}}
{{--                                            Order</a>--}}
{{--                                    @endif--}}
                                </th>
                            </tr>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-12 col-lg-12">
                <div class="box box-bordered border-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Order View</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr style="background: #e3e3e3;">
                                    <td class="text-dark">
                                        <label for="">Image</label>
                                    </td>
                                    <td class="text-dark">
                                        <label for="">Product Name </label>
                                    </td>
                                    <td class="text-dark">
                                        <label for="">Product Code</label>
                                    </td>
                                    <td class="text-dark">
                                        <label for=""> Color </label>
                                    </td>
                                    <td class="text-dark">
                                        <label for=""> Size </label>
                                    </td>
                                    <td class="text-dark">
                                        <label for=""> Quantity </label>
                                    </td>
                                    <td class="text-dark">
                                        <label for=""> Price </label>
                                    </td>
                                    <td class="text-dark">
                                        <label for=""> Download </label>
                                    </td>
                                </tr>
                                @foreach ($orderItems as $item)
                                    <tr>
                                        <td class="col-md-1">
                                            <label for=""><img src="{{ asset( $item->product->product_thumbnail ) }}"
                                                               height="50px;" width="50px;"> </label>
                                        </td>
                                        <td class="col-md-3">
                                            <label for=""> {{ $item->product->product_name_en }}</label>
                                        </td>
                                        <td class="col-md-3">
                                            <label for=""> {{ $item->product->product_code }}</label>
                                        </td>
                                        <td class="col-md-2">
                                            <label for=""> {{ $item->color }}</label>
                                        </td>
                                        <td class="col-md-2">
                                            <label for=""> {{ $item->size }}</label>
                                        </td>
                                        <td class="col-md-2">
                                            <label for=""> {{ $item->qty }}</label>
                                        </td>

                                        <td class="col-md-3">
                                            <label for=""> ${{ $item->unit_price }} (
                                                $ {{ $item->unit_price * $item->qty }} ) </label>
                                        </td>
                                        @php
                                            $file = App\Models\Product::where('id', $item->product_id)->first();
                                        @endphp
                                        <td class="col-md-1">
                                            @if ($order->status == 'pending')
                                                <strong>
                                                        <span class="badge badge-pill badge-success"
                                                              style="background: #418DB9;"> No
                                                            File</span> </strong>
                                            @elseif($order->status == 'confirm')
                                                <a target="_blank"
                                                   href="{{ asset('upload/pdf/' . $file->digital_file) }}">
                                                    <strong>
                                                            <span class="badge badge-pill badge-success"
                                                                  style="background: #FF0000;">
                                                                Download Ready</span> </strong> </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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
@endsection


