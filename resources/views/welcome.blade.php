@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 100px">
        <form class="w-100 mb-3" method="GET" action="{{ route('showBySearch') }}">
            <div class="d-flex gap-2">
                {{-- @csrf --}}
                <div class="input-group">
                    <input value="{{ isset($_GET['keyword']) ? $_GET['keyword'] : '' }}" name='keyword' type="text"
                        class="form-control" placeholder="Tulis nama kendaraan..." aria-label="Recipient's username"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-outline-secondary" type="button">Cari</button>
                    </div>
                </div>
                <select onchange="this.form.submit()" value="{{ isset($_GET['model']) ? $_GET['model'] : '' }}"
                    name="model" class="form-select w-25" aria-label="Default select example">
                    <option selected value=""> Jenis Kendaraan</option>
                    @foreach ($car_type_list as $item)
                        <option value="{{ $item }}">{{ $item }}</option>
                    @endforeach
                </select>
                <select onchange="this.form.submit()" value="{{ isset($_GET['avail']) ? $_GET['avail'] : '' }}"
                    name="avail" class="form-select w-25">
                    <option selected value="">Pilih status</option>
                    <option value="true" selected>Tersedia</option>
                    <option value="false" selected>Sedang disewa</option>
                </select>
            </div>
        </form>
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
                            <img class="w-100" style="height: 200px; object-fit: cover"
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
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectElement = document.querySelector('select[name="model"]');
            const formElement = document.getElementById('searchForm');

            console.log('first', formElement.submit)

            selectElement.addEventListener('change', function() {
                if (this.value !== '') {
                    // Get the current URL
                    // const currentUrl = window.location.href;

                    // // Extract the existing query parameters
                    // const url = new URL(currentUrl);
                    // const searchParams = new URLSearchParams(url.search);

                    // // Add the selected model to the query parameters
                    // searchParams.set('model', this.value);

                    // // Replace the current URL with the updated URL containing both parameters
                    // url.search = searchParams.toString();
                    // history.replaceState(null, '', url.toString());
                    formElement.submit()
                }
            });
        });
    </script> --}}
@endsection


{{-- <div class="input-group">
    <input value="{{ isset($_GET['keyword']) ? $_GET['keyword'] : '' }}" name='keyword' type="text"
        class="form-control" placeholder="Tulis nama kendaraan..." aria-label="Recipient's username"
        aria-describedby="basic-addon2">
    <div class="input-group-append">
        <button type="submit" class="btn btn-outline-secondary" type="button">Cari</button>
    </div>
</div>

<select value="{{ isset($_GET['model']) ? $_GET['model'] : '' }}" name="model" class="form-select">
    <option selected value=""> Jenis Kendaraan</option>
    @foreach ($car_type_list as $item)
        <option value="{{ $item }}">{{ $item }}</option>
    @endforeach
</select>

<select value="{{ isset($_GET['keyword']) ? $_GET['keyword'] : '' }}" name="avail" class="form-select">
    <option selected value="">Pilih status</option>
    <option value="true" selected>Tersedia</option>
    <option value="false" selected>Sedang disewa</option>
</select> --}}
