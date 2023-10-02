@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 100px">
        <div class="d-flex gap-2">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Tulis nama kendaraan..."
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Cari</button>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Jenis Kendaraan
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Sedan</a>
                    <a class="dropdown-item" href="#">Hatchback</a>
                    <a class="dropdown-item" href="#">MPV</a>
                    <a class="dropdown-item" href="#">Minivan</a>
                    <a class="dropdown-item" href="#">Microbus</a>
                    <a class="dropdown-item" href="#">Bus</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ketersediaan
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Ready stock</a>
                    <a class="dropdown-item" href="#">Sebentar lagi ready</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tahun
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">2020 Keatas</a>
                    <a class="dropdown-item" href="#">2015-2019</a>
                </div>
            </div>
        </div>
    </div>
@endsection
