@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 100px">
        <div class="card" style="width: 100%;">
            <img class="w-100"
                src="https://img.philtoyota.com/2023/03/21/059B8x1O/avanzas-engine-and-fuel-consumption-c905.jpg"
                alt="img-car">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <div class="row mt-2 mb-2">
                    <div class="col-md-5">Merek</div>
                    <div class="col-md-1">:</div>
                    <div class="col-md-5">{{ $car_detail->brand }}</div>
                    <div class="col-md-5">Jenis</div>
                    <div class="col-md-1">:</div>
                    <div class="col-md-5">{{ $car_detail->model }}</div>
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

                {{ Form::open(['route' => ['rental.update', $car_detail->id], 'method' => 'POST']) }}
                {{ Form::hidden('id_car', $car_detail->id) }}
                {{ Form::hidden('id_tenant', auth()->user()->id) }}
                {{ Form::hidden('rental_deadline', '2023/01/01') }}
                {{ Form::hidden('rental_start', '2023/01/01') }}
                {{ Form::hidden('_method', 'PUT') }}
                {{ Form::submit('Sewa', ['class' => 'btn btn-primary w-100', $car_detail->availability ? '' : 'disabled']) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection
