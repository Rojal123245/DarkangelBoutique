@extends('welcome')
@section('page_title', $page['page_title'])
@section('admincontent')
    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list col-md-12 ">
                        <form method="post" action="/admin-home/sendEmail">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-mail"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="userEmail">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-mail"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <textarea name="message" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" name="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @error('userEmail')
    <div class="text-red-500 text-xs">{{ $message }}</div>
    @enderror
@endsection
