@extends('admin.layouts.app')

@section('main-content')

<a href="{{ route('teachers.index') }}" class="btn btn-primary">Go back</a>
<br>
<br>
<div class="row">
    <div class="col-4 col-xl-4 stretch-card">
        <div class="card">
            <img src="{{ url('storage/photos/teachers/' . $teacher->photo) }}" class="card-img-top" alt="avatar">
            <div class="card-body">
                <h4 class="card-title">{{ $teacher -> name }}</h4>
                <h6 class="card-text">Email: {{ $teacher -> email }}</h6>
                <p class="card-text">Phone: {{ $teacher -> phone }}</p>



            </div>
        </div>
    </div>
</div> <!-- row -->


@endsection