@extends('welcome')
@section('page_title', $page['page_title'])
@section('admincontent')
    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list col-md-12 ">

                        {{ Form::open(['route'=>'category.store', 'id' => 'frmitems', 'files' => true, 'enctype' => 'multipart/form-data']) }}
                        @csrf
                        @include('admin.category._form')
                        <button class="btn btn-success pull-right" type="submit" style="margin-top: 15px !important;" >Submit</button>
                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
