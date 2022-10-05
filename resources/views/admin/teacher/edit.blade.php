@extends('admin.layouts.app')

@section('main-content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">Edit Teacher</h4>
    </div>
</div>
<a href="{{ route('teachers.index') }}" class="btn btn-primary">Go back</a>
<br>
<br>
<div class="row">
    <div class="col-6 col-xl-6 stretch-card">
        <div class="card">
            <div class="card-body">

                <!-- Error alert -->
                @if($errors -> any())
                <p class="alert alert-icon-danger"><i data-feather="alert-circle"></i>{{ $errors -> first() }} <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></p>
                @endif

                <!-- Success message -->
                @if(Session::has('success'))
                <p class="alert alert-icon-success"><i data-feather="check-circle"></i>{{ Session::get('success') }} <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></p>
                @endif

                <form class="forms-sample" action="{{ route('teachers.update', $teacher -> id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" autocomplete="off" placeholder="Name" value="{{$teacher -> name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input value="{{$teacher -> email}}" type="email" class="form-control" name="email" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone</label>
                        <input value="{{$teacher -> phone}}" type="text" class="form-control" name="phone" autocomplete="off" placeholder="Phone Number">
                    </div>


                    <!-- Photo update -->
                    <div class="form-group">
                        <label>Photo upload</label><br>
                        <img style="width: 40%;" src="{{ url('storage/photos/teachers/' . $teacher->photo) }}">
                        <input type="file" name="new_photo" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" name="old_photo" value="{{ $teacher->photo }}" class="form-control file-upload-info" disabled="" placeholder="Upload Image">

                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Update</button>

                </form>
            </div>
        </div>
    </div>
</div> <!-- row -->


@endsection