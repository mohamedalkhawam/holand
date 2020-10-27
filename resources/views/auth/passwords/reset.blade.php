

@extends('layouts.auth')

@section('content')
<div class="login-form login-forgot pt-11">
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate" id="kt_login_forgot_form" method="POST" action="{{ route('password.update') }}">
                            <!--begin::Title-->
                            @csrf
                            <div class="text-center pb-8">
                                <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Forgotten Password ?</h2>
                                <p class="text-muted font-weight-bold font-size-h4">Enter your email to reset your password</p>
                            </div>
                            <!--end::Title-->

                            <!--begin::Form group-->
                            <div class="form-group">
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" id="email" type="email" placeholder="Email" name="email"  value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus/>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--end::Form group-->
                            <div class=form-group> 
                                    <input  type="password" name="password" id="password" autocomplete="off" required validate />
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="password" placeholder="Password" id="password" autocomplete="off" name="password" required/>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--end::Form group-->

                            <!--begin::Form group-->
                            <div class="form-group">
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"  placeholder="Confirm password" autocomplete="off" id="password-confirm" type="password" class="form-control" name="password_confirmation" required />
                            </div>
                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
                                <button type="button" id="kt_login_forgot_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Submit</button>
                                <button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Cancel</button>
                            </div>
                            <!--end::Form group-->
                        </form>
                        <!--end::Form-->
                    </div>





 @endsection
