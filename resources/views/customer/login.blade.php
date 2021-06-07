@extends('customer.index')
@section('loginContent')


    <form class="contact100-form validate-form" method="POST" action="{{route('customer.customerLogin')}}">
        @csrf
        <span class="contact100-form-title">
					Dark Angel
				</span>
        @if(Session::has('success'))
            <p class="text-primary small">{{Session::get('success')}}</p>
        @endif
        @if(session()->has('error'))
            <p class="text-primary small" style="color: red">
                {{ session()->get('error') }}
            </p>
        @endif
        <label class="label-input100" for="email">Enter your email *</label>
        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
            <input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
            <span class="focus-input100"></span>
        </div>

        <label class="label-input100" for="message">Enter Your Password *</label>
        <div class="wrap-input100">
            <input id="phone" class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
        </div>

        <div class="container-contact100-form-btn">
            <button class="contact100-form-btn" type="submit">
                Login
            </button>

        </div>

    </form>
@endsection
