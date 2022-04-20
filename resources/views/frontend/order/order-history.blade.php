
@include('frontend.frontend_layout.body.style')
@include('frontend.frontend_layout.body.header')

<div class="body-content">
    <div class="container">
        <div class="my-wishlist-page">
            <div class="row">
                <div class="col-md-12 my-wishlist">
                    <div class="table-responsive">
                        <div class="page-header" style="background-color: #faf8f5">
                            <h1 class="page-title">Order History</h1>
                        </div>
                        <nav class="breadcrumb-nav has-border">
                            <div class="container">
                                <ul class="breadcrumb">
                                    <li><a href="{{ route('dashboard') }}">Home</a></li>
                                    <li><a href="{{ route('user.profile') }}">My Profile</a></li>
                                    <li><a href="{{ route('user.orders') }}">Order History</a></li>
                                    <li><a href="{{ route('user.cancel-orders') }}">Return Orders</a></li>
                                    <li><a href="{{ route('user.return-orders') }}">Cancel Orders</a></li>
                                </ul>
                            </div>
                        </nav>
                        <div class="container">
                            <div class="page-content pt-10 mt-0 pb-10 mb-8">
                                <div class="table-responsive mb-5">
                                    <table id="myOrder" class="table table-hover table-bordered display mb-5">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Invoice No</th>
                                            <th>Total</th>
                                            <th>Payment</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse ($orders as $order)
                                            <tr class="text-center">
                                                <td scope="row">{{ $loop->index+1 }}</td>
                                                <td>{{ $order->created_at->diffForHumans() }}</td>
                                                <td>{{ $order->invoice_number }}</td>
                                                <td>{{ $order->amount }}</td>
                                                <td>{{ $order->payment_method }}</td>
                                                <td>
                                                    @if ($order->status == 'pending')
                                                        <span class="bg-blue-300 text-blue-800 text-xl font-semibold mr-2 px-4 py-4 rounded dark:bg-blue-200 dark:text-blue-800">{{ $order->status }}</span>
                                                    @elseif ($order->status == 'confirmed')
                                                        <span class="bg-gray-300 text-gray-800 text-xl font-semibold mr-2 px-4 py-4 rounded dark:bg-gray-700 dark:text-gray-300">{{$order->status}}</span>
                                                    @elseif ($order->status == 'processing')
                                                        <span class="bg-purple-300 text-purple-800 text-xl font-semibold mr-2 px-4 py-4 rounded dark:bg-purple-200 dark:text-purple-900">{{$order->status}}</span>
                                                    @elseif ($order->status == 'picked')
                                                        <span class="bg-yellow-300 text-yellow-800 text-xl font-semibold mr-2 px-4 py-4 rounded dark:bg-yellow-200 dark:text-yellow-900">{{$order->status}}</span>
                                                    @elseif ($order->status == 'shipped')
                                                        <span class="bg-gray-300 text-gray-800 text-xl font-semibold mr-2 px-4 py-4 rounded dark:bg-gray-700 dark:text-gray-300">{{$order->status}}</span>
                                                    @elseif ($order->status == 'delivered')
                                                        <span class="bg-green-300 text-green-800 text-xl font-semibold mr-2 px-4 py-4 rounded dark:bg-green-200 dark:text-green-900">{{$order->status}}</span>
                                                    @elseif ($order->status == 'return')
                                                        <span class="bg-red-300 text-red-800 text-xl font-semibold mr-2 px-4 py-4 rounded dark:bg-red-200 dark:text-red-900">Cancel</span>
                                                    @elseif ($order->status == 'cancel')
                                                        <span class="bg-pink-300 text-pink-800 text-xl font-semibold mr-2 px-4 py-4 rounded dark:bg-pink-200 dark:text-pink-900">Return</span>
                                                    @else
{{--                                                        <span class="bg-red-100 text-red-800 text-xl font-semibold mr-2 px-4 py-4 rounded dark:bg-red-200 dark:text-red-900">Cancel</span>--}}
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('order-deatils', $order->id) }}"
                                                       class="btn  btn-sm btn-primary mb-2" >
                                                        <i class="fa fa-eye"></i> View
                                                    </a>
                                                    <a href="{{ route('invoice-download', $order->id) }}"
                                                       class="btn btn-sm btn-danger"><i class="fa fa-download"></i> Invoice</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr><td><h3 class="text-center">No order placed yet!</h3></td></tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>

                                <div class="social-links share-on">
                                    <h5 class="mr-4">Share on:</h5>
                                    <div class="social-links">
                                        <a href="#" class="social-link fab fa-facebook-f" title="Facebook"></a>
                                        <a href="#" class="social-link fab fa-twitter" title="Twitter"></a>
                                        <a href="#" class="social-link fab fa-pinterest" title="Pinterest"></a>
                                        <a href="#" class="social-link fab fa-linkedin-in" title="Linkedin"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('frontend.frontend_layout.body.script')

@include('frontend.frontend_layout.body.footer')


