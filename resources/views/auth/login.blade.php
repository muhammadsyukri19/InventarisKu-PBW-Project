@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
            <div class="p-4 m-3">
                <h5 class="text-dark font-weight-normal pt-5 mt-5">Aplikasi <span class="font-weight-bold">Inventaris Barang
                        Sekolah</span></h5>
                <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" tabindex="1" placeholder="Masukan alamat email.." value="{{ old('email') }}"
                            required autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="d-block">
                            <label for="password" class="control-label">Password</label>
                        </div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" tabindex="2" placeholder="Masukan kata sandi.." required>
                        <div class="invalid-feedback">
                            Mohon masukkan password!
                        </div>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                            Login
                        </button>
                    </div>
                </form>
                <div class="mt-5 text-muted text-center">
                    Belum punya akun? <a href="{{ route('register') }}">Daftar</a>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
            data-background="../assets/img/unsplash/login-bg.jpg">
            <div class="absolute-bottom-left index-2">
                <div class="text-light p-5 pb-2">
                    <div class="mb-5 pb-3">
                        <h1 class="mb-2 display-4 font-weight-bold" id="greetings"></h1>
                        <h5 class="font-weight-normal text-muted-transparent">InventarisKu</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @include('layouts.partials.greetings')
    <script>
        $(document).ready(function() {
            $("#greetings").html(greetings());
        });
    </script>
@endpush
