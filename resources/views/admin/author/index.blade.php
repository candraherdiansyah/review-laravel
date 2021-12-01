@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Authors
                        <a href="{{ route('author.create') }}" class="btn btn-sm btn-info" style="float: right">
                            add Data
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>No</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Full Name</th>
                                    <th>Action</th>
                                </tr>
                                @php $no = 1; @endphp
                                @foreach ($author as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->firstname }}</td>
                                        <td>{{ $data->lastname }}</td>
                                        <td>{{ $data->fullName() }}</td>
                                        <td>
                                            <form action="{{ route('author.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('author.edit', $data->id) }}"
                                                    class="btn btn-outline-success">Edit</a>
                                                <a href="{{ route('author.show', $data->id) }}"
                                                    class="btn btn-outline-warning">Show</a>
                                                <button type="submit" class="btn btn-outline-danger"
                                                    onclick="return confirm('Apakah anda yakin?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
