@extends('template2')
@section('judul_halaman', 'Data Hewan')

@section('konten')

<p>
    <br>
    <a href="/hewan/tambah" class="btn btn-primary">
        Tambah Hewan Baru
    </a>
</p>

<p>Cari Data Hewan :</p>

<form action="/hewan/cari" method="GET">
    <input type="text" name="cari" placeholder="Cari Hewan .." class="form-control">
    <input type="submit" value="CARI" class="btn btn-success">
</form>

<br>

<table class="table table-striped table-hover">
    <tr>
        <th>Kode Hewan</th>
        <th>Nama Hewan</th>
        <th>Jumlah Hewan</th>
        <th>Tersedia</th>
        <th>Opsi</th>
    </tr>

    @foreach($hewan as $h)
    <tr>
        <td>{{ $h->kodehewan }}</td>
        <td>{{ $h->namahewan }}</td>
        <td>{{ $h->jumlahhewan }}</td>
        <td>{{ $h->tersedia }}</td>
        <td>
            <a href="/hewan/edit/{{ $h->kodehewan }}" class="btn btn-warning">
                Edit
            </a>

            |

            <a href="/hewan/hapus/{{ $h->kodehewan }}" class="btn btn-danger">
                Hapus
            </a>
        </td>
    </tr>
    @endforeach

</table>

{{ $hewan->links() }}

@endsection
