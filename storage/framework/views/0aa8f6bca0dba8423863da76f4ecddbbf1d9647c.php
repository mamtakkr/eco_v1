
<?php $__env->startSection('content'); ?>

<!-- ============================================== HEADER : END ============================================== -->

<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
        <li><a href="<?php echo e(route('shop')); ?>">Shop</a></li>
      </ul>
    </div>
    <!-- /.breadcrumb-inner -->
  </div>
  <!-- /.container -->
</div>
<div class="row">
			<div class="col-md-12 mycard py-5 text-center">
				<div class="mycards">
					<h4>Thank You for purchasing</h4>
					<a href="<?php echo e(route('shop')); ?>" class="btn btn-upper btn-primary outer-left-xs mt-5">Continue Shopping</a>
                    <br><br><br><br><br><br>
				</div>
			</div>
		</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eco_V1\resources\views/thank_you.blade.php ENDPATH**/ ?>