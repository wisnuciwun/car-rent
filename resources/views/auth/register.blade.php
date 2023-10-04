@extends('layouts.app')

@section('content')
    <div style="padding-top: 100px" class="container d-flex min-vh-100 justify-content-center align-items-center">
        <div class="d-flex justify-content-center col-5">
            <form class="w-100" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label for="name">Nama</label>
                    <div class="w-100">
                        <input maxlength="50" id="name" type="text" placeholder="Tulis nama anda"
                            class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autofocus>

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
                        <input maxlength="100" id="address" type="text" placeholder="Tulis alamat anda"
                            class="form-control  @error('address') is-invalid @enderror" name="address"
                            value="{{ old('address') }}" required>

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
                            name="email" value="{{ old('email') }}" required placeholder="Tulis alamat email anda">

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
                        <input id="onlyNumbers" name="phone" onkeypress="return isNumber(event)"
                            class="form-control  @error('phone') is-invalid @enderror" maxlength="13"
                            placeholder="Tulis nomor handphone anda. Contoh : 081298698252" name="phone"
                            value="{{ old('phone') }}" required>

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
                        <input id="onlyNumbers" name="license" onkeypress="return isNumber(event)"
                            class="form-control  @error('license') is-invalid @enderror" placeholder="Tulis nomor SIM anda"
                            maxlength="14" name="license" value="{{ old('license') }}" required>

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
                            name="password" required autocomplete="new-password" placeholder="Tulis password">

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
                            placeholder="Tulis password kembali" required autocomplete="new-password">
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

    <script type="text/javascript">
        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if ((charCode > 31 && charCode < 48) || charCode > 57) {
                return false;
            }
            return true;
        }
    </script>
@endsection
