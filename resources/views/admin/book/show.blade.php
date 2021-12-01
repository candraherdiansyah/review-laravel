@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Book</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for=""> Book Title</label>
                            <input type="text" name="title" value="{{ $book->title }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Book Writer</label>
                            <input type="text" name="" class="form-control" value="{{ $book->author->fullName() }}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for=""> Amount Book</label>
                            <input type="number" name="amount" value="{{ $book->amount }}" class="form-control"
                                readonly>

                        </div>
                        <div class="form-group">
                            <label for=""> Book Cover</label>
                            <br>
                            <img src="{{ $book->image() }}" style="width:350px; height:350px; padding:10px;" />
                        </div>
                        <div class="form-group">
                            <a href="{{ url('admin/books') }}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
