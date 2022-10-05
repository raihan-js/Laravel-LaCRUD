@extends('admin.layouts.app')

@section('main-content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">All Students</h4>
    </div>
</div>

<div class="row">
    <div class="col-12 col-xl-12 stretch-card">
        <div class="card">
            <div class="card-body">
                @if(Session::has('success'))
                <p class="alert alert-icon-success"><i data-feather="check-circle"></i>{{ Session::get('success') }} <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></p>
                @endif
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Student
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Phone
                                </th>
                                <th>
                                    Dept.
                                </th>
                                <th>
                                    Gender
                                </th>
                                <th>
                                    Courses
                                </th>

                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse($students as $student)
                            <tr>
                                <td class="py-1">
                                    {{$loop -> index + 1}}

                                </td>
                                <td class="py-1">
                                    <img src="{{ url('storage/photos/' . $student->photo) }}" alt="image">
                                </td>
                                <td>
                                    {{$student -> name}}
                                </td>
                                <td>
                                    {{$student -> email}}

                                </td>
                                <td>
                                    {{$student -> phone}}

                                </td>
                                <td>
                                    {{$student -> department}}

                                </td>
                                <td>
                                    {{$student -> gender}}

                                </td>
                                <td>
                                    @foreach(json_decode($student->courses) as $item)

                                    <span class="badge badge-primary">{{$item}}</span>

                                    @endforeach
                                </td>

                                <td>

                                    <a href="{{ route('studentShow', $student -> id) }}"><i data-feather="eye" class="py-1 link-icon text-primary"></i></a>
                                    <a href="{{ route('studentEdit', $student -> id) }}"><i data-feather="edit" class="py-1 link-icon"></i></a>
                                    <a class="delete-btn" href="{{ route('studentDelete', $student -> id) }}"><i data-feather="trash" class="py-1 link-icon text-danger"></i></a>

                                </td>
                            </tr>

                            @empty
                            <tr>
                                <td colspan="9">
                                    <div class="row w-100 mx-0">
                                        <div class="col-md-8 col-xl-6 mx-auto d-flex flex-column align-items-center">

                                            <h4 class="mb-2">No Students Found</h4>
                                            <h6 class="text-muted mb-3 text-center">You have not added any student.</h6>
                                            <a href="{{route('studentCreate')}}" class="btn btn-primary">Add now</a>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> <!-- row -->


@endsection