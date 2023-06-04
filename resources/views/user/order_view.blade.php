@extends('layouts.front')
@section('content')

<!-- ============================================== HEADER : END ============================================== -->

<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{route('index')}}">Home</a></li>
                <li class='active'>Handbags</li>
            </ul>
        </div>
        <!-- /.breadcrumb-inner -->
    </div>
    <!-- /.container -->
</div>
<!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row'>
            <div class='col-xs-12 col-sm-12 col-md-3 sidebar'>
                <!-- ================================== TOP NAVIGATION ================================== -->
                <div class="side-menu animate-dropdown outer-bottom-xs">
                    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> My Account Settings</div>
                    <nav class="yamm megamenu-horizontal">
                        <ul class="nav">
                            <li>
                                <a href="{{--route('profile-show')--}}" class="btn btn-dark"> My Profile </a>
                            </li>
                            <li>
                                <a href="{{route('front-user-orders-show')}}" class="btn btn-dark"> My Orders</a>
                            </li>
                        </ul>
                        <!-- /.nav -->
                    </nav>
                    <!-- /.megamenu-horizontal -->
                </div>
            </div>
            <!-- /.sidebar -->
            <div class="col-xs-12 col-sm-12 col-md-9 rht-col">
                <!-- ========================================== SECTION – HERO ========================================= -->
                <div id="category" class="category-carousel hidden-xs">
                    <div class="col-md-12">

                        <div class="card">
                            <!-- /.card-header -->
                            <h4 class="mt-2 ml-3">Order Details: <br><br>
                            <b>Order Id: </b>{{$order->id}}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="{{route('generate-invoice', $order->id)}}" class="btn btn-success float-right py-1">Generate Invoice</a>
                            </h4>
                            <div class="card-body">
                                <div class="tab-pane" id="settings">
                                    <table class="table table-striped table-hover responsive">
                                        <tr>
                                            <td colspan='2'><b>Total Amount: </b>{{$order->total_amount}}</td>
                                            <td colspan='2'><b>Date: </b>{{date('d-M-Y', strtotime($order['created_at']))}}</td>
                                            <td colspan='2'><b>Customer Name: </b>{{$order->relUser->name}}</td>
                                            <td colspan='2'><b>Contact No: </b>{{$order->relUser->contact}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan='2'><b>Tracking No: </b>{{$order->tracking_no}}</td>
                                            <td colspan='2'><b>Tracking Message: </b>{{$order->tracking_msg}}</td>
                                            <td colspan='2'><b>Payment Mode: </b>{{$order->payment_mode}}</td>
                                            <td colspan='2'><b>Payment Id: </b>{{$order->payment_id}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan='2'><b>Payment Status: </b>{{$order->payment_status}}</td>
                                            <td colspan='2'><b>Order Status: </b>{{$order->order_status}}</td>
                                            <td colspan='2'><b>Cancel Reason: </b>{{$order->cancel_reason}}</td>
                                            <td colspan='2'><b>Notify: </b>{{$order->notify}}</td>
                                        </tr>

                                    </table>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <h4 class="mt-2 ml-3">Order Items Details</h4>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>amount</th>
                                            <th>tax_amount</th>
                                            <th>discount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($order->relOrderItem as $row)
                                        <tr>
                                            <td>{{$row['order_id']}}</td>
                                            <td>{{$row->relProduct->title}}</td>
                                            <td>{{$row['price']}}</td>
                                            <td>{{$row['quantity']}}</td>
                                            <td>{{$row['amount']}}</td>
                                            <td>{{$row['tax_amount']}}</td>
                                            <td>{{$row['discount']}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>

                    <div class="col-md-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <h4 class="mt-2 ml-3">Shipping Address Details</h4>
                            <div class="card-body">
                                <div class="tab-pane" id="settings">
                                    <table class="table table-striped table-hover responsive">
                                        <tr>
                                            <td colspan='2'><b>Customer Name: </b>{{$order->relUser->name}}</td>
                                            <td colspan='2'><b>Shipping Name: </b>{{$order->relShippingAddress->name}}</td>
                                            <td colspan='2'><b>Contact: </b>{{$order->relShippingAddress->contact}}</td>
                                            <td colspan='2'><b>Pincode: </b>{{$order->relShippingAddress->pincode}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan='2'><b>Locality: </b>{{$order->relShippingAddress->locality}}</td>
                                            <td colspan='2'><b>Address: </b>{{$order->relShippingAddress->address}}</td>
                                            <td colspan='2'><b>City: </b>{{$order->relShippingAddress->city}}</td>
                                            <td colspan='2'><b>State: </b>{{$order->relShippingAddress->state}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan='2'><b>Landmark: </b>{{$order->relShippingAddress->landmark}}</td>
                                            <td colspan='2'><b>Alternate Contact no: </b>{{$order->relShippingAddress->contact2}}</td>
                                            <td colspan='2'><b>Address Type: </b>{{$order->relShippingAddress->address_type}}</td>
                                        </tr>

                                    </table>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /.owl-carousel #logo-slider -->
</div>
<!-- /.logo-slider-inner -->

</div>

@endsection