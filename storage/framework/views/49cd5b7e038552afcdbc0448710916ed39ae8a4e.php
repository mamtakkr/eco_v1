
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
                    <?php if(count($errors)>0): ?>
                    <div class="alert bg-green alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>

                    <?php endif; ?>
                    <?php if($message=Session::get('success')): ?>
                    <div class="alert bg-green alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <?php echo e($message); ?>

                    </div>

                    <?php endif; ?><br>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-2 ml-3">Order Status
                                <a href="<?php echo e(route('orders-show')); ?>" class="btn btn-success float-right py-1">Back</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mt-2 ml-3"><b>Order Details</b>
                                <p class="bg bg-warning float-right py-1">Tracking Id: <?php echo e($order->tracking_no); ?></p>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm border">
                        <h6 class="card-header">Tracking Status</h6>
                        <div class="body">
                            <p class="ml-3">
                                <?php if($order->tracking_msg == null): ?>
                                No Status Updated
                                <?php else: ?>
                                <?php echo e($order->tracking_msg); ?>

                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm border">
                        <h6 class="card-header">Order Status</h6>
                        <div class="body">
                            <p class="ml-3">
                                <?php echo e($order->order_status); ?>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm border">
                        <h6 class="card-header">Payment Status</h6>
                        <div class="body">
                            <p class="ml-3">
                                Status: <?php echo e($order->payment_status); ?><br>
                                Mode: <?php echo e($order->payment_mode); ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tracking Status Update</h5>
                        <hr class="mt-4">
                        <?php if($order->order_status == "completed"): ?>
                        <?php echo e($order->tracking_msg); ?>

                        <?php elseif($order->order_status == "canceled"): ?>
                        <?php echo e($order->tracking_msg); ?>

                        <?php else: ?>
                        <form action="<?php echo e(route('order-update-tracking-status')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="_method" value="Patch" />
                            <input type="hidden" name="id" class="form-control" value="<?php echo e(old('id',$order->id)); ?>">
                            <div class="form-group row">
                                <select name="tracking_msg" class="form-control">
                                    <option value="">-- Select --</option>
                                    <option value="Pending" <?php if($order->tracking_msg=="Pending"): ?> selected <?php endif; ?> >Pending</option>
                                    <option value="Packed" <?php if($order->tracking_msg=="Packed"): ?> selected <?php endif; ?> >Packed</option>
                                    <option value="Shipped" <?php if($order->tracking_msg=="Shipped"): ?> selected <?php endif; ?> >Shipped</option>
                                    <option value="Delivered" <?php if($order->tracking_msg=="Delivered"): ?> selected <?php endif; ?> >Delivered</option>
                                </select>
                            </div>
                            <div class="input-group-append">
                                <button type="submit" class="input-group-text bg-info text-white">Update</button>
                            </div>
                        </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cancel Order</h5>
                        <hr class="mt-4">
                        <?php if($order->order_status == "completed"): ?>
                        Completed
                        <?php elseif($order->order_status == "canceled"): ?>
                        <?php echo e($order->cancel_reason); ?>

                        <?php else: ?>
                        <form action="<?php echo e(route('order-cancel-order')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="_method" value="Patch" />
                            <input type="hidden" name="id" class="form-control" value="<?php echo e(old('id',$order->id)); ?>">
                            <div class="form-group row">
                                <select name="cancel_reason" class="form-control">
                                    <option value="">-- Select --</option>
                                    <option value="Customer Not Available">Customer Not Available</option>
                                    <option value="Product Damage">Product Damage</option>
                                    <option value="No Response">No Response</option>
                                    <option value="Delayed">Delayed</option>
                                </select>
                            </div>
                            <div class="input-group-append">
                                <button type="submit" class="input-group-text bg-info text-white">Cancel</button>
                            </div>
                        </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Completed Order</h5>
                        <hr class="mt-4">
                        <?php if($order->order_status == "pending"): ?>
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#CompletedOrderModal" class="badge badge-pill badge-primary px-3 py-2">Proceed to Finish this order</a>
                        <?php elseif($order->order_status == "completed"): ?>
                        Order Completed
                        <?php elseif($order->order_status == "canceled"): ?>
                        Order Canceled.! So not allowed to complete this order
                        <?php else: ?>
                        Nothing
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<div class="modal fade" id="CompletedOrderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Complete Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(route('order-complete-order')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="_method" value="Patch" />
            <input type="hidden" name="id" class="form-control" value="<?php echo e(old('id',$order->id)); ?>">
                <div class="modal-body">
                    <?php if($order->payment_status == "pending"): ?>
                        <h6>
                            <input type="checkbox" name="cash_received" required>Received Payment (Cash On Delivery)
                        </h6>
                        <p>Check the box to confirm that you received the cash from customer close this order</p>
                    <?php else: ?>
                        <h5>The payment has been done Online.</h5>
                    <?php endif; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eco_V1\resources\views/admin/orders/order_edit.blade.php ENDPATH**/ ?>