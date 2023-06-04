
<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Order Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Order Details</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <h4 class="mt-2 ml-3">Order Details
                            <a href="<?php echo e(route('generate-invoice', $order->id)); ?>" class="btn btn-success float-right py-1">Generate Invoice</a>
                        </h4>
                        <div class="card-body">
                            <div class="tab-pane" id="settings">
                                <table class="table table-striped table-hover responsive">
                                    <tr>
                                        <td colspan='5'><b>Total Amount: </b><?php echo e($order->total_amount); ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan='3'><b>Order Id: </b><?php echo e($order->id); ?></td>
                                        <td></td>
                                        <td><b>Date: </b><?php echo e(date('d-M-Y', strtotime($order['created_at']))); ?></td>
                                    </tr>

                                    <tr>
                                        <td colspan='3'><b>Customer Name: </b><?php echo e($order->relUser->name); ?></td>
                                        <td></td>
                                        <td><b>Contact No: </b><?php echo e($order->relUser->contact); ?></td>
                                    </tr>

                                    <tr>
                                        <td colspan='3'><b>Tracking No: </b><?php echo e($order->tracking_no); ?></td>
                                        <td></td>
                                        <td><b>Tracking Message: </b><?php echo e($order->tracking_msg); ?></td>
                                    </tr>

                                    <tr>
                                        <td colspan='3'><b>Payment Mode: </b><?php echo e($order->payment_mode); ?></td>
                                        <td></td>
                                        <td><b>Payment Id: </b><?php echo e($order->payment_id); ?></td>
                                    </tr>

                                    <tr>
                                        <td colspan='3'><b>Payment Status: </b><?php echo e($order->payment_status); ?></td>
                                        <td></td>
                                        <td><b>Order Status: </b><?php echo e($order->order_status); ?></td>
                                    </tr>

                                    <tr>
                                        <td colspan='3'><b>Cancel Reason: </b><?php echo e($order->cancel_reason); ?></td>
                                        <td></td>
                                        <td><b>Notify: </b><?php echo e($order->notify); ?></td>
                                    </tr>
                                </table>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->


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
                                    <?php $__currentLoopData = $order->relOrderItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($row['order_id']); ?></td>
                                        <td><?php echo e($row->relProduct->title); ?></td>
                                        <td><?php echo e($row['price']); ?></td>
                                        <td><?php echo e($row['quantity']); ?></td>
                                        <td><?php echo e($row['amount']); ?></td>
                                        <td><?php echo e($row['tax_amount']); ?></td>
                                        <td><?php echo e($row['discount']); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>

                            </table>
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->


                <div class="col-md-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <h4 class="mt-2 ml-3">Shipping Address Details</h4>
                        <div class="card-body">
                            <div class="tab-pane" id="settings">
                                <table class="table table-striped table-hover responsive">
                                    <tr>
                                        <td colspan='5'><b>Customer Name: </b><?php echo e($order->relUser->name); ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan='3'><b>Shipping Name: </b><?php echo e($order->relShippingAddress->name); ?></td>
                                        <td></td>
                                        <td colspan='3'><b>Contact: </b><?php echo e($order->relShippingAddress->contact); ?></td>
                                    </tr>

                                    <tr>
                                        <td colspan='3'><b>Pincode: </b><?php echo e($order->relShippingAddress->pincode); ?></td>
                                        <td></td>
                                        <td colspan='3'><b>Locality: </b><?php echo e($order->relShippingAddress->locality); ?></td>
                                    </tr>

                                    <tr>
                                        <td colspan='5'><b>Address: </b><?php echo e($order->relShippingAddress->address); ?></td>
                                    </tr>

                                    <tr>
                                        <td colspan='3'><b>City: </b><?php echo e($order->relShippingAddress->city); ?></td>
                                        <td></td>
                                        <td colspan='3'><b>State: </b><?php echo e($order->relShippingAddress->state); ?></td>
                                    </tr>

                                    <tr>
                                        <td colspan='5'><b>Landmark: </b><?php echo e($order->relShippingAddress->landmark); ?></td>
                                        <td></td>
                                        <td colspan='5'><b>Alternate Contact no: </b><?php echo e($order->relShippingAddress->contact2); ?></td>
                                    </tr>

                                    <tr>
                                        <td colspan='5'><b>Address Type: </b><?php echo e($order->relShippingAddress->address_type); ?></td>
                                    </tr>

                                </table>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
</div><!-- /.container-fluid -->

<!-- /.content-wrapper -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eco_V1\resources\views/admin/orders/order_view.blade.php ENDPATH**/ ?>