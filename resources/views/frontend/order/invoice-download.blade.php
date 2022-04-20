<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Invoice</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
    .font{
      font-size: 15px;
    }
    .authority {
        /*text-align: center;*/
        float: right
    }
    .authority h5 {
        margin-top: -10px;
        color: #ff9c28;
        /*text-align: center;*/
        margin-left: 35px;
    }
    .thanks p {
        color: #ff9c28;;
        font-size: 16px;
        font-weight: normal;
        font-family: serif;
        margin-top: 20px;
    }
</style>

</head>
<body>

  <table width="100%" style="background: #F7F7F7; padding:0 20px 0 20px;">
    <tr>
        <td valign="top">
            <img src="{{ public_path('frontend/assets/images/logo.png') }}" style="width: 200px; height: 50px">

        </td>
        <td align="right">
            <pre class="font" >

               Email:{{ env('MAIL_FROM_ADDRESS') }}

            </pre>
        </td>
    </tr>

  </table>


  <table width="100%" style="background:white; padding:2px;""></table>

  <table width="100%" style="background: #F7F7F7; padding:0 5 0 5px;" class="font">
    <tr>
        <td>
          <p class="font" style="margin-left: 20px;">
           <strong>Name:</strong> {{ $order->name }} <br>
           <strong>Email:</strong> {{ $order->email }} <br>
           <strong>Phone:</strong> {{ $order->phone }} <br>

           <strong>Address:</strong> {{ $order->address }} <br>
           <strong>Location:</strong>
           {{ $order->state->state_name }},
           {{ $order->district->district_name }},
           {{ $order->division->division_name }} <br>
           <strong>Post Code:</strong> {{ $order->post_code }}
         </p>
        </td>
        <td>
          <p class="font">
            <h3><span style="color: #ff9c28;">Invoice:</span> #{{ $order->invoice_number }}</h3>
            Order Date: {{ $order->created_at }} <br>
            Delivery Date: {{ $order->delivered_date }} <br>
            Payment Type : {{ $order->payment_type }} <br>
            Payment Method: {{ $order->payment_method }}
        </span>
         </p>
        </td>
    </tr>
  </table>
  <br/>
<h3>Products</h3>


  <table width="100%">
    <thead style="background-color: #ff9c28; color:#FFFFFF;">
        <tr class="font">
         <th>Image</th>
        <th>Product Name</th>
        <th>Size</th>
        <th>Color</th>
        <th>Code</th>
        <th>Quantity</th>
        <th>Unit Price </th>
            <th>Total </th>
      </tr>
    </thead>
    <tbody>

        @foreach ($orderItems as $item)
      <tr class="font mb-5">
         <td align="center">

{{--{{dd(public_path($item->product->product_thumbnail ))}}--}}
            <img src="{{ public_path($item->product->product_thumbnail )  }}" style="width: 100px; height: 100px">
        </td>
        <td align="center">{{ $item->product->product_name_en }}</td>
        <td align="center">{{ $item->size }}</td>
        <td align="center">{{ $item->color }}</td>
        <td align="center">{{ $item->product->product_code }}</td>
        <td align="center">{{ $item->qty }}</td>
        <td align="center">{{$item->unit_price }}</td>
          <td align="center">{{$item->qty * $item->unit_price}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <br>
  <table width="100%" style=" padding:0 10px 0 10px;">
    <tr>
        <td align="right" >
            @if(isset($extracharge[0]->extracharge))
                @if($unit_price_sum < 500)
                    <h2><span style="color: #983254;">Subtotal        : </span>           Rs. {{$total}}  </h2>
                    <h2><span style="color: #983254;">Discount Price  : </span>(-)  Rs. {{ ($total + $extracharge[0]->extracharge) - $order->amount }}</h2>
                    <h2><span style="color: #983254;">Shipping Charge : </span>(+) Rs. {{$extracharge[0]->extracharge}}</h2>
                    <h2><span style="color: #983254;">Grand Total     : </span>        Rs. {{ $order->amount }}</h2>
                @else
                    <h2><span style="color: #983254;">Subtotal       : </span>       Rs. {{ $total }}</h2>
                    <h2><span style="color: #983254;">Discount Price : </span>(-) Rs. {{ $total - $order->amount }}</h2>
                    <h2><span style="color: #983254;">Grand Total    : </span>    Rs. {{ $order->amount }}</h2>
                @endif
            @else
                <h2><span style="color: #983254;">Subtotal       : </span>       Rs. {{ $total }}</h2>
                <h2><span style="color: #983254;">Discount Price : </span> (-) Rs. {{ $total - $order->amount }}</h2>
                <h2><span style="color: #983254;">Grand Total    : </span>    Rs. {{ $order->amount }}</h2>
            @endif
        </td>
    </tr>
  </table>
  <div class="thanks mt-3">
    <p>Thanks For Buying Products..!!</p>
  </div>
  <div class="authority float-right mt-5">
      <p>-----------------------------------</p>
      <h5>Authority Signature:</h5>
    </div>
</body>
</html>



