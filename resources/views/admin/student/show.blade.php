@extends('admin.layouts.app')

@section('main-content')

<a href="{{ route('studentIndex') }}" class="btn btn-primary">Go back</a>
<br>
<br>
<div class="row">
    <div class="col-4 col-xl-4 stretch-card">
        <div class="card">
            <img src="{{ url('storage/photos/' . $stu->photo) }}" class="card-img-top" alt="avatar">
            <div class="card-body">
                <h4 class="card-title">{{ $stu -> name }}</h4>
                <h6 class="card-text">Email: {{ $stu -> email }}</h6>
                <p class="card-text">Phone: {{ $stu -> phone }}</p>
                <p class="card-text">Dept: {{ $stu -> department }}</p>
                <p class="card-text">Gender: {{ $stu -> gender }}</p>
                <p class="card-text">Courses:</p>
                <p class="card-text">
                    @foreach(json_decode($stu->courses) as $item)

                    <span class="badge badge-primary">{{$item}}</span>

                    @endforeach
                </p>




            </div>
        </div>
    </div>
</div> <!-- row -->


@endsection