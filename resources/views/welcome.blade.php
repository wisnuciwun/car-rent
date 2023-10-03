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
        <div>
            <div class="card pointer" onclick="window.location.replace('/detail')" style="width: 25rem;">
                <div class="card-body">
                    <h5 class="card-title">Avanza 2022</h5>
                    <div class="d-flex align-items-center gap-2 mb-1">
                        <img src="https://i.ibb.co/SwhPvJC/avatar.png" style="width: 15px; height: 15px" alt="">
                        <p class="card-text">Hartono</p>
                    </div>
                    <div class="position-relative w-100">
                        <img class="w-100"
                            src="https://img.philtoyota.com/2023/03/21/059B8x1O/avanzas-engine-and-fuel-consumption-c905.jpg"
                            alt="img-car">
                        <div style="bottom: 8px; right: 8px" class="badge badge-pill bg-success position-absolute">Tersedia
                        </div>
                    </div>
                    <div class="row mt-2 mb-2">
                        <div class="col-md-5">Merek</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-5">Daihatsu</div>
                        <div class="col-md-5">Jenis</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-5">Sedan</div>
                        <div class="col-md-12"></div>
                        <div class="col-md-5">Plat nomor</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-5">D 1244 VCV</div>
                        <div class="col-md-12"></div>
                        <div class="col-md-5">Harga sewa</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-5">Rp. 125.000 / hari</div>
                        <div class="col-md-12"></div>
                        <div class="col-md-5 mt-3">Deskripsi :</div>
                        <div class="col-md-12">
                            Mobil mulus
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary w-100">Sewa</a>
                </div>
            </div>
        </div>
    </div>
@endsection
