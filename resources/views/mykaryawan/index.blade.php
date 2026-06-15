@extends('template2')

@section('judul_halaman', 'Kode soal mykaryawan')


@section('konten')

<table class="table table-striped table-hover">
    <tr>
        <th>Kode Pegawai</th>
        <th>Nama Lengkap</th>
        <th>Divisi</th>
        <th>Departemen</th>
        <th>Opsi</th>
    </tr>

    @foreach($mykaryawan as $m)
    <tr>
        <td>{{ $m->kodepegawai }}</td>

        <td>
            {{ ucwords(strtolower($m->namalengkap)) }}
        </td>

        <td>{{ $m->divisi }}</td>

        <td>{{ $m->departemen }}</td>

        <td>
            <a href="{{ route('mykaryawan.view', $m->kodepegawai) }}"
                class="btn btn-success">
                View
            </a>
        </td>
    </tr>
    @endforeach

</table>

@endsection
