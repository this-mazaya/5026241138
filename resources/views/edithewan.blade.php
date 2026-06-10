@extends('template2')
@section('judul_halaman', 'Data Hewan')

@section('konten')

<br>
<a href="/hewan" class="btn btn-secondary mb-4">Kembali</a>

@foreach($hewan as $h)

<div class="card">

    <div class="card-header">
        Form Edit Data Hewan
    </div>

    <div class="card-body">

        <form action="/hewan/update" method="post">

            {{ csrf_field() }}

            <input type="hidden"
                name="id"
                value="{{ $h->kodehewan }}">

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">
                    Nama Hewan
                </label>

                <div class="col-sm-10">
                    <input type="text"
                        name="namahewan"
                        class="form-control"
                        maxlength="30"
                        required
                        value="{{ $h->namahewan }}">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">
                    Jumlah Hewan
                </label>

                <div class="col-sm-10">
                    <input type="number"
                        name="jumlahhewan"
                        class="form-control"
                        required
                        value="{{ $h->jumlahhewan }}">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">
                    Tersedia
                </label>

                <div class="col-sm-10">

                    <div class="form-check">
                        <input type="radio"
                            name="tersedia"
                            value="Y"
                            class="form-check-input"
                            required
                            @if($h->tersedia == 'Y') checked @endif>

                        <label class="form-check-label">
                            Ya
                        </label>
                    </div>

                    <div class="form-check">
                        <input type="radio"
                            name="tersedia"
                            value="N"
                            class="form-check-input"
                            required
                            @if($h->tersedia == 'N') checked @endif>

                        <label class="form-check-label">
                            Tidak
                        </label>
                    </div>

                </div>
            </div>

            <input type="submit"
                value="Simpan Data"
                class="btn btn-primary">

        </form>

    </div>
</div>

@endforeach

@endsection
