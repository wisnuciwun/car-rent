@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 100px">
        <div>Nama</div>
        <div>{{ $data->name }}</div>
        <div>Nomor Handphone</div>
        <div>{{ $data->phone }}</div>
        <div>Nomor SIM</div>
        <div>{{ $data->license }}</div>
        <div>Alamat</div>
        <div>Daftar mobil yang anda sewa :</div>
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
                @for ($i = 0; $i < count($rented_car); $i++)
                    <tr>
                        <th scope="row">{{ $i + 1 }}</th>
                        <td>{{ $rented_car[$i]->name }}</td>
                        <td>{{ strval($rented_car[$i]->rental_start) }}</td>
                        <td>{{ strval($rented_car[$i]->rental_deadline) }}</td>
                        <td>{{ $rented_car[$i]->return_date ? strval($rented_car[$i]->return_date) : '-' }}</td>
                        <td>{{ $rented_car[$i]->duration * $rented_car[$i]->fee }}
                        </td>
                        <td style="text-align: right">
                            @if ($rented_car[$i]->return_date != null)
                                <button class="btn btn-success w-100">Sudah Dikembalikan</button>
                            @else
                                {{ Form::open(['route' => ['updateRentData', $rented_car[$i]->id], 'method' => 'POST']) }}
                                {{-- {{ Form::hidden('id_car', $car_detail->id) }}
                         {{ Form::hidden('id_tenant', auth()->user()->id) }}
                         {{ Form::hidden('rental_deadline', '2023/01/01') }}
                         {{ Form::hidden('rental_start', '2023/01/01') }} --}}
                                {{-- {{ Form::hidden('_method', 'PUT') }} --}}
                                {{ Form::submit('Kembalikan', ['class' => 'btn btn-danger w-100']) }}
                                {{ Form::close() }}
                            @endif

                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
        <div class="d-flex justify-content-between">
            <div>Daftar mobil anda sewakan :</div>
            <a href="/addnew" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Mobil</th>
                    <th scope="col">Merek</th>
                    <th scope="col">Nomor Polisi</th>
                    <th scope="col">Tarif Sewa Per Hari</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($user_cars); $i++)
                    <tr>
                        <th scope="row">{{ $i + 1 }}</th>
                        <td>{{ $user_cars[$i]->name }}</td>
                        <td>{{ $user_cars[$i]->brand }}</td>
                        <td>{{ $user_cars[$i]->police_num }}</td>
                        <td>{{ $user_cars[$i]->fee }}</td>
                        <td>
                            {{-- {{ Form::open(['route' => ['rental.edit', $user_cars[$i]->id], 'method' => 'PUT']) }} --}}
                            {{-- {{ Form::hidden('id_car', $car_detail->id) }}
                       {{ Form::hidden('id_tenant', auth()->user()->id) }}
                       {{ Form::hidden('rental_deadline', '2023/01/01') }}
                       {{ Form::hidden('rental_start', '2023/01/01') }} --}}
                            {{-- {{ Form::hidden('_method', 'PUT') }} --}}
                            {{ Form::submit('Hapus', ['class' => 'btn btn-danger w-100']) }}
                            {{-- {{ Form::close() }} --}}
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
@endsection
