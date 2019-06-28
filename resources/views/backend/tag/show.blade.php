@extends('layouts.backend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data Tag</div>
                <div class="card-body">
    <div class="form-group">
        <label for="">Tag</label>
        <input class="form-control" value="{{ $tag->name }}" type="text" name="name" disabled>
    </div>
    <div class="form-group">
        <a href="{{ url('admin/tag') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </div>
            </div>
                </div>
                    </div>
                        </div>
@endsection