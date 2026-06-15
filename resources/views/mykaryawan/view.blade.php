@extends('template2')

@section('judul_halaman', 'Kode soal mykaryawan')

@section('konten')

<a href="{{ route('mykaryawan.index') }}"
    class="btn btn-secondary mb-4">
    Kembali
</a>

@foreach($mykaryawan as $m)

<div class="card">

    <div class="card-header">
        Form Lihat Data Karyawan
    </div>

    <div class="card-body">

        <form>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">
                    Kode Pegawai
                </label>

                <div class="col-sm-10">
                    <input
                        type="text"
                        class="form-control"
                        value="{{ $m->kodepegawai }}"
                        disabled>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">
                    Nama Lengkap
                </label>

                <div class="col-sm-10">
                    <input
                        type="text"
                        class="form-control"
                        value="{{ ucwords(strtolower($m->namalengkap)) }}"
                        disabled>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">
                    Divisi
                </label>

                <div class="col-sm-10">
                    <input
                        type="text"
                        class="form-control"
                        value="{{ $m->divisi }}"
                        disabled>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">
                    Departemen
                </label>

                <div class="col-sm-10">
                    <input
                        type="text"
                        class="form-control"
                        value="{{ $m->departemen }}"
                        disabled>
                </div>
            </div>

        </form>

    </div>
</div>

@endforeach

@endsection
