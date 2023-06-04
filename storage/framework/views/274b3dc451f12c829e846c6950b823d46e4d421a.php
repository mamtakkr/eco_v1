
<?php $__env->startSection('content'); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div align="right">
                        <a href="<?php echo e(route('product-create')); ?>" class="btn btn-primary">Add New Product</a><br>
                    </div>
                    <?php if($error=Session::get('error')): ?>
                    <div class="alert bg-red alert-dismissible" role="alert" id="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <?php echo e($error); ?>

                    </div>

                    <?php endif; ?>
                    <?php if($message=Session::get('success')): ?>
                    <div class="alert bg-green alert-dismissible" role="alert" id="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <?php echo e($message); ?>

                    </div>

                    <?php endif; ?><br>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Product</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>Title</th>
                                        <th>Images</th>
                                        <th>Status</th>
                                        <th style="width: 13%; ">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($row->relCategory['status']=='active' || $row->relChildCategory['status']=='active'): ?>
                                    <tr>
                                        <td><?php echo e($row['id']); ?></td>
                                        <td><a><?php echo e($row->relCategory['title']); ?></a></td>
                                        <td><a><?php echo e($row->relChildCategory['title']); ?></a></td>
                                        <td><?php echo e($row['title']); ?></td>
                                        <td>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <?php if(!empty($row->image_url1)): ?>
                                                        <img alt="Avatar" class="table-avatar" src="<?php echo e(URL::to('/')); ?>/public/images/products/<?php echo e($row->image_url1); ?>" height="50" width="50">
                                                    <?php endif; ?>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="toogle" value="<?php echo e($row->id); ?>" data-toggle="switchbutton" <?php echo e($row['status']=='show' ? 'checked' : ''); ?> data-onlabel="show" data-offlabel="&nbsp; hide" data-size="sm" data-onstyle="success" data-offstyle="danger">
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-eye"></i></a>
                                            <a class="btn btn-info btn-sm" href="<?php echo e(route('product-edit',$row['id'])); ?>"><i class="fas fa-pencil-alt"></i></a>
                                            <form name="myForm" method="POST" action="<?php echo e(route('product-delete',$row['id'])); ?>" class="float-right">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="_method" value="Delete" />
                                                <a href="#" data-toggle="tooltip" title="delete" class="btn btn-danger btn-sm dltBtn" data-id="<?php echo e($row->id); ?>"><i class="fas fa-trash"></i></a>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
    $(document).ready(function() {
        $('input[name=toogle]').change(function() {
            var mode = $(this).prop('checked');
            var id = $(this).val();
            // alert(id);
            $.ajax({
                url: "<?php echo e(route('ajax-product-status-update')); ?>",
                method: "POST",
                data: {
                    _token: '<?php echo e(csrf_token()); ?>',
                    mode: mode,
                    id: id
                },
                success: function(result) {
                    if (result.status) {
                        alertify.set('notifier', 'position', 'top-right');
                        alertify.success(result.msg);
                    } else {
                        alertify.set('notifier', 'position', 'top-right');
                        alertify.error("Please Try Again!");
                    }
                },
                error: function(request, status, error) {
                    console.log('Error is' + request.responseText);
                }
            });
        });
    });

    // $('.dltBtn').click(function(e){
    //     var form = $(this).closest('form');
    //     var dataID = $(this).data('id');
    //     e.preventDefault();
    //     swal({
    //             title: "Are you sure?",
    //             text: "Once deleted, you will not be able to recover this Record!",
    //             icon: "warning",
    //             buttons: true,
    //             dangerMode: true,
    //         })
    //         .then((willDelete) => {
    //             if (willDelete) {
    //                 form.submit();
    //                 swal("Poof! Your Record has been deleted!", {
    //                     icon: "success",
    //                 });
    //             } else {
    //                 swal("Your Record is safe!");
    //             }
    //         });
    // });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara-projects\eco_V1\resources\views/admin/products/products_show.blade.php ENDPATH**/ ?>