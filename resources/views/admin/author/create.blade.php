@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">add Author</div>
                    <div class="card-body">
                        <form action="{{ route('author.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" name="firstname"
                                    class="form-control
                                    @error('firstname') is-invalid @enderror">

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" name="lastname"
                                    class="form-control
                                    @error('lastname') is-invalid @enderror">

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <br>
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
