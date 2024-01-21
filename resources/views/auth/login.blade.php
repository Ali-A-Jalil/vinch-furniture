@extends('layouts.app')
@section('content')
    <div class="container-fluid" style="height: 100%">
        <div class="row">


            <div class="col-md-6 px-0 align-items-center vh-100 d-none d-xl-block d-lg-block d-md-block"
                style="background:url({{ asset('') }}) center center/cover no-repeat;">
                <div id="bg"></div>
            </div>


            <div class="col-md-6  text-center p-0 vh-100">
                <div id="particles"></div>
                <form method="POST" action="{{ route('login') }}" class="mx-auto container"
                    style="margin-top:20vh;width:60%;">
                    {{ csrf_field() }}
                    <div class="form-group">

                        <h1 class="text-white">ERP</h1>

                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>
                        <input id="phone" name="phone" type="text"
                            class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" required
                            autocomplete="phone" autofocus placeholder="Phone Number" value="{{ old('phone', null) }}"
                            style="font-size: 19px !important;">
                        @if ($errors->has('phone'))
                            <div class="invalid-feedback">
                                {{ $errors->first('phone') }}
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        </div>

                        <input id="password" name="password" type="password"
                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required
                            placeholder="Pssword" style="font-size: 19px !important;">

                        @if ($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>


                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="input-group mb-4">
                                <div class="form-check checkbox">
                                    <input class="form-check-input" name="remember" type="checkbox" id="remember"
                                        style="vertical-align: middle;" />
                                    <label class="form-check-label text-white" for="remember"
                                        style="vertical-align: middle;">
                                        {{ trans('global.remember_me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link mt-0 pt-0 text-white px-0" href="{{ route('password.request') }}">
                                    {{ trans('global.forgot_password') }}
                                </a>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-block mt-3 btn-warning text-dark px-4"
                                style="background-color:#17d414">
                                {{ trans('global.login') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $("form").on("submit", function() {
            $(this).find(":submit").prop("disabled", true);
        });
    </script>
@endsection
