@extends('welcome')
@section('page_title', $page['page_title'])
@section('admincontent')

<form method="post" action="/admin-home/sendEmail">

    @csrf

    <input type="text" name="userEmail">
    <input type="text" name="message">
    <input type="submit" value="Submit">
    @error('userEmail')
        <div class="text-red-500 text-xs">{{ $message }}</div>
    @enderror
</form>

@endsection
