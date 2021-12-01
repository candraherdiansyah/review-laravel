@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Book
                        <a href="{{ route('books.create') }}" class="btn btn-sm btn-outline-primary"
                            style="float: right">Add
                            Book</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nomor</th>
                                    <th>Book Title</th>
                                    <th>Book Writer</th>
                                    <th>Amount Book</th>
                                    <th>Cover</th>
                                    <th>Action</th>
                                </tr>
                                @php $no=1; @endphp
                                @foreach ($books as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->title }}</td>
                                        <td>{{ $data->author->fullName() }}</td>
                                        <td>{{ $data->amount }}</td>
                                        <td><img src="{{ $data->image() }}" alt="" style="width:150px; height:150px;"
                                                alt="Cover"></td>
                                        <td>
                                            <form action="{{ route('books.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('books.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('books.show', $data->id) }}"
                                                    class="btn btn-outline-warning">Show</a>
                                                <button type="submit" class="btn btn-outline-danger"
                                                    onclick="return confirm('Are you sure?');">Delete</button>
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
