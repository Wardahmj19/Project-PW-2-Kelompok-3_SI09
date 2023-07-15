@extends('template/admin')

@section('content')

    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Produk</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/shop/home">Home</a></li>
            <li class="breadcrumb-item active">Produk</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->

    <a href="{{route('produk.checkout')}}" class="btn btn-primary mb-3">Tambah Produk</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Kode</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Jenis Produk</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php $number = 1; @endphp
            @foreach($produk as $produks)
            <tr>
                <td>{{ $number               }}</td>
                <td>{{ $produks->kode            }}</td>
                <td>{{ $produks->nama_produk     }}</td> 
                <td>{{ $produks->harga           }}</td>
                <td>{{ $produks->jumlah          }}</td>
                <td>{{ $produks->jenis_produk_id }}</td>
                @if (Auth::user()->role != 'pelanggan')
                    <td>
                        <a href="{{ route('produk.edit', $produks) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('produk.destroy', $produks) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" 
                            class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                @else
                <td>
                    Tidak ada action
                </td>
                @endif
            </tr>
            @php $number++ @endphp
            @endforeach
        </tbody>
    </table>

@endsection