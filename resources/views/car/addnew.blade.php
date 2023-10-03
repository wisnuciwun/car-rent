@extends('layouts.app')

@section('content')
    {{-- $table->bigInteger('id_owner');
$table->text('description');
$table->string('brand');
$table->string('model');
$table->string('police_num');
$table->integer('fee');
$table->boolean('availability');
$table->timestamps(); --}}
    <div class="container" style="padding-top: 100px">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <br>
            <input type="text" placeholder="Nama mobil">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Brand</label>
            <br>
            <input type="text" placeholder="Brand mobil">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Plat Nomor</label>
            <br>
            <input type="text" placeholder="Plat nomor">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Biaya Sewa</label>
            <br>
            <input type="text" placeholder="Biaya sewa">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Foto mobil</label>
            <br>
            <input type="text" placeholder="Biaya sewa">
        </div>
        <button class="btn btn-primary">Simpan</button>
    </div>
@endsection
