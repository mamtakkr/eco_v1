
<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>General Setting</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Setting</li>
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
                                <form method="post" action="<?php echo e(route('general-setting-update-action')); ?>" enctype="multipart/form-data" class="form-horizontal">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="_method" value="Patch" />
                                    <input type="hidden" name="id" class="form-control <?php echo e($errors->has('body')? 'is-invalid':''); ?> " value="<?php echo e(old('id',$general_setting->id)); ?>">
                                    
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Product For Frontend</label>
                                        <div class="col-sm-10">
                                            <select id="pro_id" name="pro_id" class="form-control">
                                                <option value="">Select a Product For Frontend</option>
                                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($product->id); ?>" <?php if($product->id==$general_setting->pro_id): ?> selected <?php endif; ?> ><?php echo e($product->title); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" class="form-control" placeholder="Title" value="<?php echo e(old('title',$general_setting->title)); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Meta Description</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="meta_description" class="form-control" placeholder="Meta Description" value="<?php echo e(old('meta_description',$general_setting->meta_description)); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Meta Keywords</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="meta_keywords" class="form-control" placeholder="Meta Keywords" value="<?php echo e(old('meta_keywords',$general_setting->meta_keywords)); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="address" class="form-control" placeholder="Address" value="<?php echo e(old('address',$general_setting->address)); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo e(old('email',$general_setting->email)); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Phone No</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="phone" class="form-control" placeholder="Phone No" value="<?php echo e(old('phone',$general_setting->phone)); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Fax</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="fax" class="form-control" placeholder="Fax" value="<?php echo e(old('fax',$general_setting->fax)); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Footer</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="footer" class="form-control" placeholder="Footer" value="<?php echo e(old('footer',$general_setting->footer)); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Footer Url</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="footer_url" class="form-control" placeholder="Footer Url" value="<?php echo e(old('footer_url',$general_setting->footer_url)); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Facebook Url</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="facebook_url" class="form-control" placeholder="Facebook Url" value="<?php echo e(old('facebook_url',$general_setting->facebook_url)); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Twitter Url</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="twitter_url" class="form-control" placeholder="Twitter Url" value="<?php echo e(old('twitter_url',$general_setting->twitter_url)); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Linkedin Url</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="linkedin_url" class="form-control" placeholder="Linkedin Url" value="<?php echo e(old('linkedin_url',$general_setting->linkedin_url)); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Pinterest Url</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="pinterest_url" class="form-control" placeholder="Pinterest Url" value="<?php echo e(old('pinterest_url',$general_setting->pinterest_url)); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Youtube Url</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="youtube_url" class="form-control" placeholder="Youtube Url" value="<?php echo e(old('youtube_url',$general_setting->youtube_url)); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Logo</label>
                                        <div class="col-sm-10">
                                            <img class="img-thumbnail" src="<?php echo e(URL::to('/')); ?>/public/images/general_settings/<?php echo e($general_setting->logo); ?>" id="output" alt="..." height="100" width="100">
                                            <input type="hidden" name="old_logo" value="<?php echo e($general_setting->logo); ?>" class="form-control">
                                            <input type="file" name="new_logo" id="image" accept="image/*" class="form-control" onchange="loadFile(event)">
                                            <script>
                                                var loadFile = function(event) {
                                                    var image = document.getElementById('output');
                                                    image.src = URL.createObjectURL(event.target.files[0]);
                                                    $('#output').slideDown();
                                                };
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Favicon</label>
                                        <div class="col-sm-10">
                                            <img class="img-thumbnail" src="<?php echo e(URL::to('/')); ?>/public/images/general_settings/<?php echo e($general_setting->favicon); ?>" id="output1" alt="..." height="100" width="100">
                                            <input type="hidden" name="old_favicon" value="<?php echo e($general_setting->favicon); ?>" class="form-control">
                                            <input type="file" name="new_favicon" id="image1" accept="image/*" class="form-control" onchange="loadFile1(event)">
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eco_V1\resources\views/admin/general_settings/general_setting_edit.blade.php ENDPATH**/ ?>