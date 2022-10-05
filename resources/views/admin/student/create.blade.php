@extends('admin.layouts.app')

@section('main-content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">Add New Student</h4>
    </div>
</div>

<div class="row">
    <div class="col-7 col-xl-7 stretch-card">
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

                <form class="forms-sample" action="{{ route('studentStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" value="{{old('name')}}" class="form-control" name="name" autocomplete="off" placeholder="Name">
                        @error('name')
                        <p class="text-danger">* required</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" value="{{old('email')}}" class="form-control" name="email" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" value="{{old('phone')}}" class="form-control" name="phone" autocomplete="off" placeholder="Phone Number">
                    </div>

                    <!-- Department -->
                    <div class="form-group">
                        <label>Select your dept.</label>
                        <select class="form-control" name="dept">
                            <option name="dept" selected="" disabled="">Select your dept.</option>
                            <option name="dept" value="CSE">CSE</option>
                            <option name="dept" value="EEE">EEE</option>
                            <option name="dept" value="BBA">BBA</option>
                        </select>
                    </div>

                    <!-- gender -->
                    <div class="form-group">
                        <label for="">Gender</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="gender" id="optionsRadios5" value="Male">
                                Male
                                <i class="input-frame"></i></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="gender" id="optionsRadios6" value="Female">
                                Female
                                <i class="input-frame"></i></label>
                        </div>

                    </div>

                    <!-- Courses -->

                    <div class="form-group">
                        <label>Select your courses</label>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="course[]" value="Solid js">
                                Solid js
                                <i class="input-frame"></i></label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="course[]" value="React">
                                React
                                <i class="input-frame"></i></label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="course[]" value="Remix">
                                Remix
                                <i class="input-frame"></i></label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="course[]" value="Vite js">
                                Vite js
                                <i class="input-frame"></i></label>
                        </div>

                    </div>


                    <!-- Photo upload -->
                    <div class="form-group">
                        <label>Photo upload</label>
                        <input type="file" name="photo" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2"> Add Now <i class="link-icon" style="width:18px;" data-feather="plus-circle"></i></button>

                </form>
            </div>
        </div>
    </div>
</div> <!-- row -->


@endsection