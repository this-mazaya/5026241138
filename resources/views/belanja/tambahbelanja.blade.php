@extends('template2')
@section('judul_halaman', 'Keranjang Belanja')

@section('konten')

<p>
    <br>
    <a href="/belanja/tambah" class="btn btn-primary">
        Beli
    </a>
</p>

<table class="table table-striped table-hover">
    <tr>
        <th>Kode Pembelian</th>
        <th>Kode Barang</th>
        <th>Jumlah Pembelian</th>
        <th>Harga per Item</th>
        <th>Total</th>
        <th>Action</th>
    </tr>

    @foreach($belanja as $b)
    <tr>
        <td>{{ $b->id }}</td>

        <td>{{ $b->kodebarang }}</td>

        <td>{{ $b->jumlah }}</td>

        <td>{{ number_format($b->harga,0,',','.') }}</td>

        <td>{{ number_format($b->jumlah * $b->harga,0,',','.') }}</td>

        <td>
            <a href="/belanja/edit/{{ $b->id }}"
                class="btn btn-warning">
                Edit
            </a>

            |

            <a href="/belanja/hapus/{{ $b->id }}"
                class="btn btn-danger">
                Batal
            </a>
        </td>
    </tr>
    @endforeach

</table>

@endsection
