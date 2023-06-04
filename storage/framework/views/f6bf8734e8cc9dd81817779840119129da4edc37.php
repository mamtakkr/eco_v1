
<?php $__env->startSection('content'); ?>

<!-- ============================================== HEADER : END ============================================== -->

<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
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
                                <a href="" class="btn btn-dark"> My Profile </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('front-user-orders-show')); ?>" class="btn btn-dark"> My Orders</a>
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
                    
                </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">Cancel Order</h5>
                            <hr class="mt-4">
                            <?php if($order->order_status == "completed"): ?>
                            Completed
                            <?php elseif($order->order_status == "canceled"): ?>
                            <?php echo e($order->cancel_reason); ?>

                            <?php else: ?>
                            <form action="<?php echo e(route('front-order-cancel-order')); ?>" method="POST">
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

        </div>
    </div>
    <!-- /.owl-carousel #logo-slider -->
</div>
<!-- /.logo-slider-inner -->

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eco_V1\resources\views/user/order_edit.blade.php ENDPATH**/ ?>