@extends('admin.layouts.app')

@section('main-content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">Edit Student</h4>
    </div>
</div>
<a href="{{ route('studentIndex') }}" class="btn btn-primary">Go back</a>
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

                <form class="forms-sample" action="{{ route('studentUpdate', $stu -> id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" autocomplete="off" placeholder="Name" value="{{$stu -> name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input value="{{$stu -> email}}" type="email" class="form-control" name="email" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone</label>
                        <input value="{{$stu -> phone}}" type="text" class="form-control" name="phone" autocomplete="off" placeholder="Phone Number">
                    </div>
                    <!-- Department -->
                    <div class="form-group">
                        <label>Select your dept.</label>
                        <select class="form-control" name="dept">
                            <option name="dept" selected="" disabled="">Select your dept.</option>
                            <option name="dept" @if($stu -> department == 'CSE') selected @endif value="CSE">CSE</option>
                            <option name="dept" @if($stu -> department == 'EEE') selected @endif value="EEE">EEE</option>
                            <option name="dept" @if($stu -> department == 'BBA') selected @endif value="BBA">BBA</option>
                        </select>
                    </div>

                    <!-- gender -->
                    <div class="form-group">
                        <label for="">Gender</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" @if($stu -> gender == 'Male') checked @endif class="form-check-input" name="gender" value="Male" >
                                Male
                                <i class="input-frame"></i></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" @if($stu -> gender == 'Female') checked @endif class="form-check-input" name="gender" value="Female">
                                Female
                                <i class="input-frame"></i></label>
                        </div>

                    </div>

                    <!-- Courses -->

                    <div class="form-group">
                        <label>Select your courses</label>
                        @foreach($courses as $course)
                        <div class="">
                            <label class="l">
                                <input type="checkbox" @if( in_array($course, json_decode($stu->courses)) ) checked @endif class="" name="course[]" value="{{ $course }}">
                                {{$course}}
                                <i class="input-frame"></i></label>
                        </div>
                        @endforeach


                    </div>


                    <!-- Photo update -->
                    <div class="form-group">
                        <label>Photo upload</label><br>
                        <img style="width: 40%;" src="{{ url('storage/photos/' . $stu->photo) }}">
                        <input type="file" name="new_photo" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" name="old_photo" value="{{ $stu->photo }}" class="form-control file-upload-info" disabled="" placeholder="Upload Image">

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