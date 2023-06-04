@extends('layouts.admin')
@section('content')

<!-- Content Wrapper. Contains page content -->
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
                <div class="col-md-12">
                    <div class="card">
                        <!-- /.card-header -->

                        <div class="card-body">
                            <!-- <div class="tab-content"> -->
                            @if(count($errors)>0)
                            <div class='alert alert-danger'>
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @if($message=Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif<br>
                            <div class="tab-pane" id="settings">
                                <form method="post" action="{{route('product-update-action')}}" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    <input type="hidden" name="_method" value="Patch" />
                                    <input type="hidden" name="id" class="form-control {{ $errors->has('body')? 'is-invalid':''}} " value="{{old('id',$product->id)}}">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Vendor</label>
                                        <div class="col-sm-10">
                                            <select name="vendor_id" class="form-control">
                                                <option value="">Select a Vendor</option>
                                                @foreach($vendors as $vendor)
                                                <option value="{{$vendor->id}}" @if($vendor->id==$product->vendor_id) selected @endif>{{$vendor->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Brand</label>
                                        <div class="col-sm-10">
                                            <select name="brand_id" class="form-control">
                                                <option value="">Select a Brand</option>
                                                @foreach($brands as $brand)
                                                <option value="{{$brand->id}}" @if($brand->id==$product->brand_id) selected @endif>{{$brand->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputTitle" class="col-sm-2 col-form-label">Main Category</label>
                                        <div class="col-sm-10">
                                            <select id="cat_id" name="cat_id" class="form-control">
                                                <option value="">Select a Category</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}" @if($category->id==$product->cat_id) selected @endif >{{$category->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row d-none" id="child_cat_div">
                                        <label for="" class="col-sm-2 col-form-label">Sub Category</label>
                                        <div class="col-sm-10">
                                            <select id="child_cat_id" name="child_cat_id" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" class="form-control" placeholder="Title" value="{{old('title',$product->title)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Price</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="price" class="form-control" placeholder="Price" value="{{old('price',$product->price)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Discount</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="discount" class="form-control" placeholder="Discount in %" value="{{old('discount',$product->discount)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Quantity</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="quantity" class="form-control" placeholder="Quantity" value="{{old('quantity',$product->quantity)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Product Code</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="code" class="form-control" placeholder="Product Code" value="{{old('code',$product->code)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Conditions</label>
                                        <div class="col-sm-10">
                                            <select name="conditions" class="form-control">
                                                <option value="">-- Select Conditions --</option>
                                                <option value="new" {{$product->conditions=='new' ? 'selected' : ''}}>New</option>
                                                <option value="popular" {{$product->conditions=='popular' ? 'selected' : ''}}>Popular</option>
                                                <option value="winter" {{$product->conditions=='winter' ? 'selected' : ''}}>Winter</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Size</label>
                                        <div class="col-sm-10">
                                            <select name="size" class="form-control">
                                                <option value="">-- Select Size --</option>
                                                <option value="S" {{$product->size=='S' ? 'selected' : ''}}>Small</option>
                                                <option value="M" {{$product->size=='M' ? 'selected' : ''}}>Medium</option>
                                                <option value="L" {{$product->size=='L' ? 'selected' : ''}}>Large</option>
                                                <option value="XL" {{$product->size=='XL' ? 'selected' : ''}}>Extra Large</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Short Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="short_description" id="short_description" class="form-control" placeholder="Short Description">{{$product->short_description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="description" id="description" class="form-control" placeholder="Description">{{$product->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Image 1</label>
                                        <div class="col-sm-10">
                                            <img class="img-thumbnail" src="{{ URL::to('/') }}/public/images/products/{{$product->image_url1}}" id="output1" alt="..." height="100" width="100">
                                            <input type="hidden" name="old_image_url1" value="{{$product->image_url1}}" class="form-control">
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
                                        <label for="" class="col-sm-2 col-form-label">Image 2</label>
                                        <div class="col-sm-10">
                                            <img class="img-thumbnail" src="{{ URL::to('/') }}/public/images/products/{{$product->image_url2}}" id="output2" alt="..." height="100" width="100">
                                            <input type="hidden" name="old_image_url2" value="{{$product->image_url2}}" class="form-control">
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
                                        <label for="" class="col-sm-2 col-form-label">Image 3</label>
                                        <div class="col-sm-10">
                                            <img class="img-thumbnail" src="{{ URL::to('/') }}/public/images/products/{{$product->image_url3}}" id="output3" alt="..." height="100" width="100">
                                            <input type="hidden" name="old_image_url3" value="{{$product->image_url3}}" class="form-control">
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
                                        <label for="" class="col-sm-2 col-form-label">Image 4</label>
                                        <div class="col-sm-10">
                                            <img class="img-thumbnail" src="{{ URL::to('/') }}/public/images/products/{{$product->image_url4}}" id="output4" alt="..." height="100" width="100">
                                            <input type="hidden" name="old_image_url4" value="{{$product->image_url4}}" class="form-control">
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
    $('#cat_id').change(function() {
        var cat_id = $(this).val();
        // alert(cat_id);
        if (cat_id != null) {
            $.ajax({
                url: "{{route('ajax-category-get-child')}}",
                type: "POST",
                data: {
                    _token: "{{csrf_token()}}",
                    cat_id: cat_id,
                },
                success: function(result) {
                    var html_option = "<option value=''>Select a Sub Category</option>"
                    if (result.status) {
                        $('#child_cat_div').removeClass('d-none');
                        $.each(result.data, function(id, title) {
                            html_option += "<option value='" + id + "'>" + title + "</option>";
                        });
                    } else {
                        $('#child_cat_div').addClass('d-none');
                    }
                    $('#child_cat_id').html(html_option);
                }
            });
        }
    });
</script>
@endsection