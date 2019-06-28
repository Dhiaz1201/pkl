@extends('layouts.backend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data Kategori</div>
                <div class="card-body">
    <div class="form-group">
        <label for="">Kategori</label>
        <input class="form-control" value="{{ $kategori->nama_kategori }}" type="text" name="nama_kategori" disabled>
    </div>
    <div class="form-group">
        <a href="{{ url('backend/kategori') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </div>
            </div>
                </div>
                    </div>
                        </div>
                            @endsection