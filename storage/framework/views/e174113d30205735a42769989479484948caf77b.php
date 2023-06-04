
<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Coupon</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Coupon</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- <div class="tab-content"> -->
                            <?php if(count($errors)>0): ?>
                            <div class='alert alert-danger'>
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                            <?php if($message=Session::get('success')): ?>
                            <div class="alert alert-success">
                                <p><?php echo e($message); ?></p>
                            </div>
                            <?php endif; ?><br>
                            <div class="tab-pane" id="settings">
                                <form method="post" action="<?php echo e(route('coupon-create-action')); ?>" enctype="multipart/form-data" class="form-horizontal">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <input type="text" name="offer_name" class="form-control" placeholder="Offer Name" value="<?php echo e(old('offer_name')); ?>">
                                        </div>
                                        <div class="col-sm-6">
                                            <select name="product_id" class="form-control">
                                                <option value="">Product (Optional)</option>
                                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($row->id); ?>"><?php echo e($row->title); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <input type="text" name="coupon_code" class="form-control" placeholder="Coupon Code" value="<?php echo e(old('coupon_code')); ?>">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="coupon_limit" class="form-control" placeholder="Coupon Limit" value="<?php echo e(old('coupon_limit')); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <select name="coupon_type" class="form-control" >
                                                <option value="">-- Select --</option>
                                                <option value="fixed">Fixed</option>
                                                <option value="percent">Percent</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="coupon_price" class="form-control" placeholder="Coupon Price" value="<?php echo e(old('coupon_price')); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <input type="datetime-local" name="start_datetime" class="form-control" placeholder="Start DateTime" value="<?php echo e(old('start_datetime')); ?>">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="datetime-local" name="end_datetime" class="form-control" placeholder="End DateTime" value="<?php echo e(old('end_datetime')); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="radio-button guest-check" for="guest">Status:</label>
                                        <div class="col-sm-3">
                                            <input id="guest" type="radio" name="status" value="active" checked>
                                            <label class="radio-button guest-check" for="guest">Active</label>
                                            <input id="guest" type="radio" name="status" value="disabled">
                                            <label class="radio-button guest-check" for="guest">Disabled</label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="radio-button guest-check" for="guest">Visibility Status:</label>
                                        <div class="col-sm-3">
                                            <input id="guest" type="radio" name="visibility_status" value="show" checked>
                                            <label class="radio-button guest-check" for="guest">Show</label>
                                            <input id="guest" type="radio" name="visibility_status" value="hide">
                                            <label class="radio-button guest-check" for="guest">Hide</label>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Save</button>
                                        </div>
                                    </div>
                                </form>
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
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eco_V1\resources\views/admin/coupons/coupon_create.blade.php ENDPATH**/ ?>