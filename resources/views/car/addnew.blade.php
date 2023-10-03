@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 100px">
        {!! Form::open(['route' => 'cars.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="mb-3">
            {{ Form::label('name', 'Nama Mobil') }}
            {{ Form::text('name', '', ['class' => 'form-control mb-2', 'placeholder' => 'Tulis nama mobil anda']) }}
        </div>
        <div class="mb-3">
            {{ Form::label('brand', 'Merek Mobil') }}
            {{ Form::text('brand', '', ['class' => 'form-control mb-2', 'placeholder' => 'Tulis brand mobil anda']) }}
        </div>
        <div class="mb-3">
            {{ Form::label('model', 'Model / Tipe') }}
            {!! Form::select('model', $car_type_list_dropdown, null, ['class' => 'form-control']) !!}
            {{-- {{ Form::dropdown('brand', '', ['class' => 'form-control mb-2', 'placeholder' => 'Tulis brand mobil anda']) }} --}}
        </div>
        <div class="mb-3">
            {{ Form::label('police_num', 'Plat Nomor') }}
            {{ Form::text('police_num', '', ['class' => 'form-control mb-2', 'placeholder' => 'Berapa plat nomor mobil anda?']) }}
        </div>
        <div class="mb-3">
            {{ Form::label('fee', 'Biaya Sewa Perbulan') }}
            {{ Form::text('fee', '', ['class' => 'form-control mb-2', 'placeholder' => 'Berapa biaya sewa mobil anda?']) }}
        </div>
        <div class="mb-3">
            {{ Form::label('description', 'Deskripsi') }}
            {{ Form::textarea('description', '', ['class' => 'form-control mb-2', 'placeholder' => 'Berapa biaya sewa mobil anda?']) }}
        </div>
        {{ Form::submit('Simpan', ['class' => 'btn btn-primary mt-4']) }}
        {!! Form::close() !!}
    </div>
@endsection
