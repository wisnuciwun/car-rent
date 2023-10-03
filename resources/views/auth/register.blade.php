@extends('layouts.app')

@section('content')
    <div class="container d-flex min-vh-100 justify-content-center align-items-center">
        <div class="d-flex justify-content-center col-5">
            <form class="w-100" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label for="name">Nama</label>
                    <div class="w-100">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Alamat</label>
                    <div>
                        <input id="address" type="text" class="form-control  @error('address') is-invalid @enderror"
                            {{-- class="form-control @error('email') is-invalid @enderror" --}} name="address" value="{{ old('address') }}" required>

                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Alamat email</label>
                    <div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="phone">Nomor Telepon</label>

                    <div>
                        <input id="phone" type="text" class="form-control  @error('phone') is-invalid @enderror"
                            {{-- class="form-control @error('email') is-invalid @enderror" --}} name="phone" value="{{ old('phone') }}" required>

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="license">Nomor SIM</label>

                    <div>
                        <input id="license" type="text" class="form-control  @error('license') is-invalid @enderror"
                            {{-- class="form-control @error('email') is-invalid @enderror" --}} name="license" value="{{ old('license') }}" required>

                        @error('license')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password">{{ __('Password') }}</label>

                    <div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password-confirm">Konfirmasi
                        Password</label>

                    <div>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                </div>

                <div class="mb-3">

                    <div>
                        <button type="submit" class="btn btn-primary w-100 mt-3">
                            Daftar
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
