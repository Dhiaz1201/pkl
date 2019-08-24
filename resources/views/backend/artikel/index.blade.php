@extends('layouts.backend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman Artikel Berita</div>
                <br>
                <center><a href="{{ route('artikel.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Kategori</th>   
                                <th>Foto</th>
                                <th>Tag</th>
                                <th>Map</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($artikel as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->judul }}</td>
                    <td>{{ $data->kategori->nama_kategori }}</td>
                    <td><img src="{{ asset('assets/img/artikel/'.$data->foto) }}" alt="" height="500px" width="500px"></td>
                    {{--  <td>{!! $data->konten !!}</td>  --}}
                    <td>
                        @foreach ($data->tag as $a)
                            {{ $a->name }}
                        @endforeach
                    </td>                
                           <td>{{ $data->map }}</td>  
                    <td><a href="{{ route('artikel.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('artikel.show', $data->id) }}" class="btn btn-success">Detail Data</a></td>
                    <td><form action="{{ route('artikel.destroy', $data->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn -sm btn-danger" type="submit">Hapus Data</button>
                    </form>
                    </td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection