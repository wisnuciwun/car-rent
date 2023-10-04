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
            {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div> --}}

            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Jenis Kendaraan
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
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
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ketersediaan
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Ready stock</a>
                    <a class="dropdown-item" href="#">Sebentar lagi ready</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tahun
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">2020 Keatas</a>
                    <a class="dropdown-item" href="#">2015-2019</a>
                </div>
            </div>
        </div>
        <div class="d-flex flex-wrap gap-3 justify-content-start">
            @for ($i = 0; $i < count($data); $i++)
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                        <h5 class="card-title text-truncate">{{ $data[$i]->name }}</h5>
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <img src="https://i.ibb.co/SwhPvJC/avatar.png" style="width: 15px; height: 15px" alt="">
                            <p class="card-text text-truncate">{{ $data[$i]->owner }}</p>
                        </div>
                        <div class="position-relative w-100">
                            <img class="w-100"
                                src={{ $data[$i]->image != null ? $data[$i]->image : 'https://bangkatengahkab.go.id/asset/foto_berita/no-image.jpg' }}
                                alt="img-car">
                            @if ($data[$i]->availability)
                                <div style="bottom: 8px; right: 8px" class="badge badge-pill bg-success position-absolute">
                                    Tersedia
                                </div>
                            @else
                                <div style="bottom: 8px; right: 8px" class="badge badge-pill bg-danger position-absolute">
                                    Sedang disewa
                                </div>
                            @endif
                        </div>
                        <div class="row mt-2 mb-2">
                            <div class="col-md-5">Merek</div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-5 text-truncate">{{ $data[$i]->brand }}</div>
                            <div class="col-md-5">Jenis</div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-5">{{ $data[$i]->model }}</div>
                            <div class="col-md-12"></div>
                            <div class="col-md-5">Plat nomor</div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-5">{{ $data[$i]->police_num }}</div>
                            <div class="col-md-12"></div>
                            <div class="col-md-5">Harga sewa</div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-5">Rp. {{ number_format($data[$i]->fee) }}</div>
                            <div class="col-md-12"></div>
                            <div class="col-md-5 mt-3">Deskripsi :</div>
                            <div class="col-md-12 text-truncate">
                                {{ $data[$i]->description }}
                            </div>
                        </div>
                        <a href='/detail/{{ $data[$i]->brand }}-{{ str_replace(' ', '-', $data[$i]->name) }}-{{ $data[$i]->id }}'
                            class="btn btn-primary w-100">Lihat</a>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
