@extends('layouts.master')
@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header otp_header">{{ __('Login') }}</div>


                    <div class="card-body otp_card_body">
                        <form method="POST" action="{{ route('loginWithOtp') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Mobile No') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="number" value="{{request('phone')}}" class="form-control" name="phone" readonly required autofocus>
                                </div>
                            </div>
                            <div class="form-group row otp">
                                <label for="password" class="col-md-4 col-form-label text-md-right">OTP</label>

                                <div class="col-md-6">

                                    <input id="otp" type="number" class="form-control" name="otp" >
                                </div>
                            </div>
                            <div class="form-group row send-otp">
                                <div class="col-md-8 offset-md-4">
                                    <button class="btn btn-success"  type="submit">Verify OTP</button>
                                </div>
                            </div>
                        </form>
                            <hr>
                            @include('auth.time_counter')
                            <hr>

                          <div class="card-header">Didn't get otp ?? click here</div>
                            <form method="POST" action="{{ route('send.otp') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="phone" class="d-none">{{ __('Mobile No') }}</label>

                                    <div class="col-md-6">
                                        <input id="phone" type="number" class="d-none" value="{{request('phone')}}" name="phone" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row send-otp">
                                    <div class="col-md-8 offset-md-4">
                                        <button class="btn btn-success"  type="submit">Resend Otp</button>
                                    </div>
                                </div>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
