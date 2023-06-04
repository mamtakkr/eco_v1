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
                    @if(count($orders) != 0)
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Tracking No</th>
                                <th>Total Amount</th>
                                <th>Payment Status</th>
                                <th>Order Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($orders as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->tracking_no}}</td>
                                <td>{{$row->total_amount}}</td>
                                <td>{{$row->payment_status}}</td>
                                <td>{{$row->order_status}}</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{route('front-order-view',$row['id'])}}"><i class="fas fa-pencil-alt"></i>View</a>
                                    <a class="btn btn-info btn-sm" href="{{route('front-order-edit',$row['id'])}}"><i class="fas fa-pencil-alt"></i>Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <h1>No Orders in your order list</h1>
                    <a href="{{ route('shop') }}" class="btn btn-upper btn-primary outer-left-xs mt-5">Continue Shopping</a>
                    @endif
                </div>
            </div>

        </div>
    </div>
    <!-- /.owl-carousel #logo-slider -->
</div>
<!-- /.logo-slider-inner -->

</div>

@endsection