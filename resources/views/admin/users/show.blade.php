@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create Book</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Full Name</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" value="{{ $user->email }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Gender</label>
                            <input type="email" name="email" value="{{ $user->userDetail->gender }}"
                                class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Address</label>
                            <textarea type="password" name="address" class="form-control"
                                readonly>{{ $user->userDetail->address }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for=""> Photo Profile </label>
                            <br>
                            <img src="{{ $user->userDetail->image() }}" style="width:150px; height:150px;" alt=""
                                srcset="">
                        </div>
                        <div class="form-group">
                            <br>
                            <a href="{{ route('users.index') }}" class="btn btn-outline-warning">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
