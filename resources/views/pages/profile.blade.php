@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 100px">
        <div class="mb-5">
            <div>Nama</div>
            <h3>{{ $data->name }}</h3>
            <div>Nomor Handphone</div>
            <h3>{{ $data->phone }}</h3>
            <div>Nomor SIM</div>
            <h5>{{ $data->license }}</h5>
            <div>Alamat</div>
            <h5>{{ $data->address }}</h5>
        </div>
        <h5 class="d-flex align-items-center gap-2">
            <span class="material-symbols-outlined">
                directions_car
            </span> Daftar mobil yang anda sewa :
        </h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Mobil</th>
                    <th scope="col">Tanggal Mulai Sewa</th>
                    <th scope="col">Tanggal Terakhir Sewa</th>
                    <th scope="col">Tanggal Pengembalian Sewa</th>
                    <th scope="col">Tarif</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if (count($rented_car) == 0)
                    <tr>
                        <td colspan="7" class="text-center">Tidak ada data.</td>
                    </tr>
                @endif
                @for ($i = 0; $i < count($rented_car); $i++)
                    <tr>
                        <th scope="row">{{ $i + 1 }}</th>
                        <td>{{ $rented_car[$i]->name }}</td>
                        <td>{{ strval($rented_car[$i]->rental_start) }}</td>
                        <td>{{ strval($rented_car[$i]->rental_deadline) }}</td>
                        <td>{{ $rented_car[$i]->return_date ? strval($rented_car[$i]->return_date) : '-' }}</td>
                        <td>Rp. {{ number_format($rented_car[$i]->duration * $rented_car[$i]->fee) }}
                        </td>
                        <td style="text-align: right">
                            @if ($rented_car[$i]->return_date != null)
                                <button class="btn btn-success w-100">Sudah Dikembalikan</button>
                            @else
                                {{ Form::open(['route' => ['updateRentData', $rented_car[$i]->id], 'method' => 'POST']) }}
                                {{ Form::submit('Kembalikan', ['class' => 'btn btn-danger w-100']) }}
                                {{ Form::close() }}
                            @endif

                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
        <div class="d-flex justify-content-between mt-5">
            <h5 class="d-flex align-items-center gap-2">
                <span class="material-symbols-outlined">
                    directions_car
                </span> Daftar mobil yang anda sewakan :
            </h5>
            <a href="/addnew" class="btn btn-primary d-flex align-items-center gap-2">
                Tambah <span class="material-symbols-outlined">
                    add
                </span></a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Mobil</th>
                    <th scope="col">Merek</th>
                    <th scope="col">Nomor Polisi</th>
                    <th scope="col">Tarif Sewa Per Hari</th>
                    {{-- <th scope="col">Peminjam</th> --}}
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @if (count($user_cars) == 0)
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada data.</td>
                    </tr>
                @endif
                @for ($i = 0; $i < count($user_cars); $i++)
                    <tr>
                        <th scope="row">{{ $i + 1 }}</th>
                        <td>{{ $user_cars[$i]->name }}</td>
                        <td>{{ $user_cars[$i]->brand }}</td>
                        <td>{{ $user_cars[$i]->police_num }}</td>
                        <td>Rp. {{ number_format($user_cars[$i]->fee) }}</td>
                        <td>
                            @if ($user_cars[$i]->availability)
                                {{ Form::open(['route' => ['cars.destroy', $user_cars[$i]->id], 'method' => 'DELETE']) }}
                                {{ Form::submit('Hapus', ['class' => 'btn btn-danger w-100']) }}
                                {{ Form::close() }}
                            @else
                                <button class="btn btn-warning w-100">Sedang disewakan</button>
                            @endif
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
@endsection
