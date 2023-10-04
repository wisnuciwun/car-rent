@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    {{ Form::open(['route' => ['rental.update', $car_detail->id], 'method' => 'POST']) }}
    <div class="container" style="padding-top: 100px">
        <div class="card" style="width: 100%;">
            <img class="w-100"
                src={{ $car_detail->image != null ? $car_detail->image : 'https://bangkatengahkab.go.id/asset/foto_berita/no-image.jpg' }}
                alt="img-car">
            <div class="card-body">
                <div class="row mt-2 mb-2">
                    <div class="col-12">
                        <h3 class="col-md-12">{{ $car_detail->name }}</h3>
                    </div>
                    <div class="col-6">
                        <div class="col-md-2">Merek</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-5">{{ $car_detail->brand }}</div>
                        <div class="col-md-12"></div>
                        <div class="col-md-2">Jenis</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-5">{{ $car_detail->model }}</div>
                        <div class="col-md-12"></div>
                        <div class="col-md-2">Plat nomor</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-5">{{ $car_detail->police_num }}</div>
                        <div class="col-md-12"></div>
                        <div class="col-md-2">Harga sewa</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-5">Rp. {{ number_format($car_detail->fee) }} / hari</div>
                        <div class="col-md-12"></div>
                        <div class="col-md-5 mt-3">Deskripsi :</div>
                        <div class="col-md-12">
                            Mobil mulus
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="w-50 mt-3">
                            <div style="max-width: 450px">
                                <div class="form-group">
                                    <div>Tanggal Mulai Peminjaman</div>
                                    <div class='input-group date' id='datetimepicker'>
                                        {{ Form::text('rental_start', '', ['class' => 'form-control']) }}
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div style="max-width: 450px">
                                <div class="form-group">
                                    <div>Tanggal Selesai Peminjaman</div>
                                    <div class='input-group date' id='datetimepicker2'>
                                        {{ Form::text('rental_deadline', '', ['class' => 'form-control']) }}
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                {{ Form::hidden('id_car', $car_detail->id) }}
                @if (!Auth::guest())
                    {{ Form::hidden('id_tenant', auth()->user()->id) }}
                @endif
                {{ Form::hidden('_method', 'PUT') }}
                {{ Form::submit('Sewa', ['class' => 'btn btn-primary w-100', $car_detail->availability ? '' : 'disabled']) }}
            </div>
        </div>
    </div>
    {{ Form::close() }}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript">
        $(function() {
            $('#datetimepicker').datetimepicker();
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('#datetimepicker2').datetimepicker();
        });
    </script>
@endsection
