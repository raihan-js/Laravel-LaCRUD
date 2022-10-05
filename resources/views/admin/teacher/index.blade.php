@extends('admin.layouts.app')

@section('main-content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">All Teachers</h4>
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
                                    Teacher
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
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse($teachers as $item)
                            <tr>
                                <td class="py-1">
                                    {{$loop -> index + 1}}

                                </td>
                                <td class="py-1">
                                    <img src="{{ url('storage/photos/teachers/' . $item->photo) }}" alt="image">
                                </td>
                                <td>
                                    {{$item -> name}}
                                </td>
                                <td>
                                    {{$item -> email}}

                                </td>
                                <td>
                                    {{$item -> phone}}

                                </td>

                                <td>

                                    <a href="{{ route('teachers.show', $item -> id) }}"><i data-feather="eye" class="py-1 link-icon text-primary"></i></a>
                                    <a href="{{ route('teachers.edit', $item -> id) }}"><i data-feather="edit" class="py-1 link-icon"></i></a>

                                    <!-- different delete system with resource controller -->
                                    <form class="d-inline" id="delete-form" action="{{ route('teachers.destroy', $item -> id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="delete-dubmit" style="background-color: transparent; border:none;" type="submit"><i data-feather="trash" class="py-1 link-icon text-danger"></i></button>
                                    </form>

                                </td>
                            </tr>

                            @empty
                            <tr>
                                <td colspan="9">
                                    <div class="row w-100 mx-0">
                                        <div class="col-md-8 col-xl-6 mx-auto d-flex flex-column align-items-center">

                                            <h4 class="mb-2">No Teachers Found</h4>
                                            <h6 class="text-muted mb-3 text-center">You have not added any teacher.</h6>
                                            <a href="{{route('teachers.create')}}" class="btn btn-primary">Add now</a>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                            

                        </tbody>
                    </table>
                    <!-- For pagination -->
                   
                </div>
            </div>
        </div>
    </div>
</div> <!-- row -->


@endsection