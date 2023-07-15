@extends('template/admin')

@section('content')
    
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Pesanan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/shop/home">Home</a></li>
            <li class="breadcrumb-item active">Pesanan</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->

    <a href="{{route('pesanan.pay')}}" class="btn btn-primary mb-3">Tambah Pesanan</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama Pemesan</th>
                <th scope="col">Alamat</th>
                <th scope="col">No HP</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Id Produk</th>
                <th scope="col">Pembayaran</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php $number = 1; @endphp
            @foreach($pesanan as $pesanans)
            <tr>
                <td>{{ $number }}</td>
                <td>{{ $pesanans->tanggal      }}</td>
                <td>{{ $pesanans->nama_pemesan }}</td> 
                <td>{{ $pesanans->alamat       }}</td>
                <td>{{ $pesanans->no_hp        }}</td>
                <td>{{ $pesanans->total        }}</td>
                <td>{{ $pesanans->produk_id    }}</td>
                <td>{{ $pesanans->pembayaran   }}</td>
                @if (Auth::user()->role != 'pelanggan')
                    <td>
                        <a href="{{ route('pesanan.tambah', $pesanans) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('pesanan.hapus', $pesanans) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Delete</button>
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