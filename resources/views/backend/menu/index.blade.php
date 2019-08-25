  @extends('layouts.backend')
  @section('content')
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman Menu Berita</div>
                <br>
                <center><a href="{{ route('menu.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Menu</th>
                                <th>Harga</th>
                                <th>Slug</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @foreach($menu as $data)
                <tr>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->harga }}</td>
                    <td>{{ $data->slug }}</td>
                    <td><a href="{{ route('menu.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('menu.show', $data->id) }}" class="btn btn-success">Detail Data</a></td>
                    <td>
                        <form action="{{ route('menu.destroy', $data->id) }}" method="post">
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