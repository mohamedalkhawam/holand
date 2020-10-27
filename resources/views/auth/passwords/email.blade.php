@extends('layouts.auth')

@section('content')
<div class="login-form login-forgot pt-11"">
   
             
                    <form class="form" novalidate="novalidate" id="kt_login_forgot_form" method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" id="email" type="email" placeholder="Email" name="email"  value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus/>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
                                <button type="button" id="kt_login_forgot_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Submit</button>
                            </div>
                    </form>
             
</div>
@endsection
