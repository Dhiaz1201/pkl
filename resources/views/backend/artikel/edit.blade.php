@extends('layouts.backend')
@section('css')
<link rel="stylesheet" href="/backend/assets/vendor/select2/select2.min.css">
@endsection
@section('js')
<script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
<script src="/backend/assets/vendor/select2/select2.min.js"></script>
<script src="/backend/assets/js/components/select2-init.js"></script>
<script>
CKEDITOR.replace( 'editor1' );
</script>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data Artikel</div>
                <div class="card-body">
                    <form action="{{ route('artikel.update', $artikel->id) }}" method="post" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
    <div class="form-group">
        <label for="">Judul</label>
        <input class="form-control" value="{{ $artikel->judul }}" type="text" name="judul">
    </div>
    <div class="form-group">
        <label>Konten</label>
        <textarea id="editor1" name="konten" class="form-control" name="konten" rows="10" cols="50">{{ $artikel->konten }}</textarea>
    </div>
    <div class="form-group">
        <label for="">Foto</label><br>
        <img src="{{ asset('assets/img/artikel/'.$artikel->foto) }}" alt="" height="250px" width="250px">
        <input type="file" class="form-control" name="foto">
    </div>
    <div class="form-group">
        <label for="">Tags</label>
            <select class="form-control" name="tag[]" id="select2" multiple>
                @foreach ($tag as $data)
                    <option value="{{ $data->id }}" {{ (in_array($data->id, $selected)) ? 'selected="selected"' : '' }}>
                        {{ $data->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="">Kategori</label>
        <select name="kategori_id" class="form-control">
            @foreach($kategori as $data)
                <option value="{{ $data->id }}"
                    {{ $artikel->kategori->id ==
                        $data->id ? 'selected="selected"' : '' }}>
                    {{ $data->nama_kategori }}
                </option>
            @endforeach
        </select>
    </div>
      <div class="form-group">
        <label for="">map</label>
        <input class="form-control" type="text" name="map">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">
        Simpan Data
        </button>
    </div>
    <div class="form-group">
        <a href="{{ url('admin/artikel') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
