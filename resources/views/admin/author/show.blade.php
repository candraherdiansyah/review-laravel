@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header"> Author</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" name="firstname" class="form-control" value="{{ $author->firstname }}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" name="lastname" class="form-control" value="{{ $author->lastname }}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Full Name</label>
                            <input type="text" name="lastname" class="form-control" value="{{ $author->fullName() }}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <br>
                            <a href="{{ route('author.index') }}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
