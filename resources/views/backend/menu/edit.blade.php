@extends('layouts.backend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data menu</div>
                <div class="card-body">
                    <form action="{{ route('menu.update', $menu->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
    <div class="form-group">
        <label for="">menu</label>
        <input class="form-control" value="{{ $menu->nama }}" type="text" name="nama">
    </div>
    <div class="form-group">
        <label for="">harga</label>
        <input class="form-control" value="{{ $menu->harga }}" type="text" name="harga">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">
        Simpan Data
        </button>
    </div>
    <div class="form-group">
        <a href="{{ url('backend/menu') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
@endsection