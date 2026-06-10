@extends('template2')
@section('judul_halaman', 'Data Nilai')

@section('konten')

<p>
    <br>
    <a href="/nilaikuliah/tambah" class="btn btn-primary">
        Tambah Data
    </a>
</p>

<table class="table table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>NRP</th>
        <th>Nilai Angka</th>
        <th>SKS</th>
        <th>Nilai Huruf</th>
        <th>Bobot</th>
    </tr>

    @foreach($nilaikuliah as $n)
    <tr>
        <td>{{ $n->id }}</td>
        <td>{{ $n->nrp }}</td>
        <td>{{ $n->nilaiangka }}</td>
        <td>{{ $n->sks }}</td>
        @php
            if($n->nilaiangka <= 40)
                $huruf = 'D';
            elseif($n->nilaiangka <= 60)
                $huruf = 'C';
            elseif($n->nilaiangka <= 80)
                $huruf = 'B';
            else
                $huruf = 'A';
        @endphp
        <td>{{ $huruf }}</td>
        <td>{{ $n->nilaiangka * $n->sks }}</td>
    </tr>
    @endforeach
</table>

@endsection
