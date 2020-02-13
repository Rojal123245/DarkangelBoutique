@extends('welcome')
@section('page_title', $page['page_title'])
@section('admincontent')
    {{ Form::open(['route'=>'saveProduct', 'name' => 'frmProduct']) }}
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group ic-cmp-int">
                <div class="form-ic-cmp">
                    <i class="notika-icon notika-support"></i>
                </div>
                <div class="nk-int-st">
                    {{ Form::text('Product Name', null, ['class'=>'form-control','id' => 'txtfirstname', 'required' => '']) }}
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group ic-cmp-int">
                <div class="form-ic-cmp">
                    <i class="notika-icon notika-mail"></i>
                </div>
                <div class="nk-int-st">
                    <input type="text" class="form-control" placeholder="Email Address">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group ic-cmp-int">
                <div class="form-ic-cmp">
                    <i class="notika-icon notika-phone"></i>
                </div>
                <div class="nk-int-st">
                    <input type="text" class="form-control" placeholder="Contact Number">
                </div>
            </div>
        </div>
    </div>
    {{ Form::close() }}
@endsection
