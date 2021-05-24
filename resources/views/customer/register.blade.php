@extends('customer.index')
@section('loginContent')
<form class="contact100-form validate-form" method="POST" action="{{route('customer.store')}}">
    @csrf
    <span class="contact100-form-title">
					Dark Angel Boutique
				</span>
    {{--            <a href="index.html"><img src={{asset("img/core-img/darkangel.jpg")}} alt="" style="width: 50%; height: 50%; float: center;"></a>--}}
    <label class="label-input100" for="first-name">Tell us your name *</label>
    <div class="wrap-input100 validate-input" data-validate="Type first name">
        <input id="first-name" class="input100" type="text" name="fullname" placeholder="Full name">
        <span class="focus-input100"></span>
    </div>
    <label class="label-input100" for="phone">Enter Address *</label>
    <div class="wrap-input100">
        <input id="first-name" class="input100" type="text" name="address" placeholder="Eg. Imadol, Lalitpur">
        <span class="focus-input100"></span>
    </div>

    <label class="label-input100" for="phone">Enter phone number *</label>
    <div class="wrap-input100">
        <input id="phone" class="input100" type="text" name="contactno" placeholder="Eg. +977 9842000000">
        <span class="focus-input100"></span>
    </div>

    <label class="label-input100" for="email">Enter your email *</label>
    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
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
            Register
        </button>
    </div>
</form>
@endsection
