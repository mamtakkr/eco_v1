
<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
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
                        <!-- /.card-header -->

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
                                <form method="post" action="<?php echo e(route('category-update-action')); ?>" enctype="multipart/form-data" class="form-horizontal">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="_method" value="Patch" />
                                    <input type="hidden" name="id" class="form-control <?php echo e($errors->has('body')? 'is-invalid':''); ?> " value="<?php echo e(old('id',$category->id)); ?>">
                                    
                                    <div class="form-group row">
                                        <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Title" value="<?php echo e(old('title',$category->title)); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2">Is Parent :</label>
                                        <div class="col-sm-10">
                                            <input id="is_parent" type="checkbox" name="is_parent" value="1" <?php echo e($category->is_parent===1 ? 'checked' : ''); ?>>Yes
                                        </div>
                                    </div>
                                    <div class="form-group row <?php echo e($category->is_parent==1 ? 'd-none' : ''); ?>" id="parent_cat_div">
                                        <label for="inputTitle" class="col-sm-2 col-form-label">Parent Category</label>
                                        <div class="col-sm-10">
                                            <select name="parent_id" class="form-control show-tick">
                                                <option value="">Select a Main Category</option>
                                                <?php $__currentLoopData = $parent_ids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($row->id); ?>" <?php if($row->id==$category->parent_id): ?> selected <?php endif; ?> ><?php echo e($row->title); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPrice" class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="description" id="description" class="form-control" placeholder="Description"><?php echo e($category->description); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPrice" class="col-sm-2 col-form-label">Image 1</label>
                                        <div class="col-sm-10">
                                            <img class="img-thumbnail" src="<?php echo e(URL::to('/')); ?>/public/images/categories/<?php echo e($category->image_url1); ?>" id="output1" alt="..." height="100" width="100">
                                            <input type="hidden" name="old_image_url1" value="<?php echo e($category->image_url1); ?>" class="form-control">
                                            <input type="file" name="new_image_url1" id="image1" accept="image/*" class="form-control" onchange="loadFile1(event)">
                                            <script>
                                                var loadFile1 = function(event) {
                                                    var image1 = document.getElementById('output1');
                                                    image1.src = URL.createObjectURL(event.target.files[0]);
                                                    $('#output1').slideDown();
                                                };
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPrice" class="col-sm-2 col-form-label">Image 2</label>
                                        <div class="col-sm-10">
                                            <img class="img-thumbnail" src="<?php echo e(URL::to('/')); ?>/public/images/categories/<?php echo e($category->image_url2); ?>" id="output2" alt="..." height="100" width="100">
                                            <input type="hidden" name="old_image_url2" value="<?php echo e($category->image_url2); ?>" class="form-control">
                                            <input type="file" name="new_image_url2" id="image2" accept="image/*" class="form-control" onchange="loadFile2(event)">
                                            <script>
                                                var loadFile2 = function(event) {
                                                    var image2 = document.getElementById('output2');
                                                    image2.src = URL.createObjectURL(event.target.files[0]);
                                                    $('#output2').slideDown();
                                                };
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPrice" class="col-sm-2 col-form-label">Image 3</label>
                                        <div class="col-sm-10">
                                            <img class="img-thumbnail" src="<?php echo e(URL::to('/')); ?>/public/images/categories/<?php echo e($category->image_url3); ?>" id="output3" alt="..." height="100" width="100">
                                            <input type="hidden" name="old_image_url3" value="<?php echo e($category->image_url3); ?>" class="form-control">
                                            <input type="file" name="new_image_url3" id="image3" accept="image/*" class="form-control" onchange="loadFile3(event)">
                                            <script>
                                                var loadFile3 = function(event) {
                                                    var image3 = document.getElementById('output3');
                                                    image3.src = URL.createObjectURL(event.target.files[0]);
                                                    $('#output3').slideDown();
                                                };
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPrice" class="col-sm-2 col-form-label">Image 4</label>
                                        <div class="col-sm-10">
                                            <img class="img-thumbnail" src="<?php echo e(URL::to('/')); ?>/public/images/categories/<?php echo e($category->image_url4); ?>" id="output4" alt="..." height="100" width="100">
                                            <input type="hidden" name="old_image_url4" value="<?php echo e($category->image_url4); ?>" class="form-control">
                                            <input type="file" name="new_image_url4" id="image4" accept="image/*" class="form-control" onchange="loadFile4(event)">
                                            <script>
                                                var loadFile4 = function(event) {
                                                    var image4 = document.getElementById('output4');
                                                    image4.src = URL.createObjectURL(event.target.files[0]);
                                                    $('#output4').slideDown();
                                                };
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Update</button>
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
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
    $('#is_parent').change(function (e){
        e.preventDefault();
        var is_checked = $('#is_parent').prop('checked');
        // alert(is_checked);
        if(is_checked){
            $('#parent_cat_div').addClass('d-none');
            $('#parent_cat_div').val('');
        }else{
            $('#parent_cat_div').removeClass('d-none');
        }
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eco_V1\resources\views/admin/categories/category_edit.blade.php ENDPATH**/ ?>