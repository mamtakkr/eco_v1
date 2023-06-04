@extends('layouts.admin')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Banner</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Banner</li>
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
                                <form method="post" action="{{route('banner-update-action')}}" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    <input type="hidden" name="_method" value="Patch" />
                                    <input type="hidden" name="id" class="form-control {{ $errors->has('body')? 'is-invalid':''}} " value="{{old('id',$banner->id)}}">
                                    
                                    <div class="form-group row">
                                        <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Title" value="{{old('title',$banner->title)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputTitle" class="col-sm-2 col-form-label">Sub Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="sub_title" class="form-control" id="inputTitle" placeholder="Sub Title" value="{{old('sub_title',$banner->sub_title)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputTitle" class="col-sm-2 col-form-label">Link Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="link_title" class="form-control" id="inputTitle" placeholder="Link Title" value="{{old('link_title',$banner->link_title)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputTitle" class="col-sm-2 col-form-label">Link Url</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="link_url" class="form-control" id="inputTitle" placeholder="Link Url" value="{{old('link_url',$banner->link_url)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPrice" class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10">
                                            <img class="img-thumbnail" src="{{ URL::to('/') }}/public/images/banners/{{$banner->image_url}}" id="output" alt="..." height="100" width="100">
                                            <input type="hidden" name="old_image_url" value="{{$banner->image_url}}" class="form-control">
                                            <input type="file" name="new_image_url" id="image" accept="image/*" class="form-control" onchange="loadFile(event)">
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

@endsection