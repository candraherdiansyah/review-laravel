@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data User
                        <a href="{{ route('users.create') }}" class="btn btn-sm btn-outline-primary"
                            style="float: right">Add
                            Users</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nomor</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                                @php $no=1; @endphp
                                @foreach ($user as $data)
                                    @if ($loop->first)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->userDetail->gender }}</td>
                                            <td><img src="{{ $data->userDetail->image() }}"
                                                    style="width: 150px; height:150px;" alt=""></td>
                                            <td>
                                                <a href="{{ route('users.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('users.show', $data->id) }}"
                                                    class="btn btn-outline-warning">Show</a>
                                            </td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->userDetail->gender }}</td>
                                            <td><img src="{{ $data->userDetail->image() }}"
                                                    style="width: 150px; height:150px;" alt=""></td>
                                            <td>
                                                <form action="{{ route('users.destroy', $data->id) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <a href="{{ route('users.edit', $data->id) }}"
                                                        class="btn btn-outline-info">Edit</a>
                                                    <a href="{{ route('users.show', $data->id) }}"
                                                        class="btn btn-outline-warning">Show</a>
                                                    <button type="submit" class="btn btn-outline-danger"
                                                        onclick="return confirm('Are you sure?');">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
