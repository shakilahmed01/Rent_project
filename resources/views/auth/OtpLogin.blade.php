@extends('layouts.master')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border">
                    <div class="card-header otp_header">{{ __('Login') }}</div>
                    @if ($message = Session::get('Failed'))
          												<div class="alert alert-success alert-block">
          														<button type="button" class="close" data-dismiss="alert">x</button>
          																<strong>{{ $message }}</strong>
          												</div>
          												@endif

                    <div class="card-body otp_card_body">
                        <form method="POST" action="{{ route('send.otp') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Mobile No') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="number" class="form-control msform" name="phone" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row send-otp">
                                <div class="col-md-8 offset-md-4">
                                    <button class="btn btn-success"  type="submit">Send OTP</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
