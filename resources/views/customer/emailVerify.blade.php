@extends('customer.index')
@section('loginContent')
    <form class="contact100-form validate-form" method="GET" action="{{route('customer.emailVerify')}}">
        @csrf
        <span class="contact100-form-title">
					Dark Angel Boutique
				</span>
        <input type="hidden" name="check_verify" value="{{$verifyCode}}">
        <input type="hidden" name="emailcheck" value="{{$customerEmail}}">
        <label class="label-input100" for="email">Enter your Verification Code</label>
        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input id="email" class="input100" type="text" name="verify_code" placeholder="Eg. example@email.com">
            <span class="focus-input100"></span>
        </div>
        <div class="container-contact100-form-btn">
            <button class="contact100-form-btn" type="submit">
                Login
            </button>
        </div>
    </form>
@endsection
