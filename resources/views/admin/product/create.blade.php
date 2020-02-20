@extends('welcome')
@section('page_title', $page['page_title'])
@section('admincontent')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list col-md-12 ">

                        {{ Form::open(['route'=>'prod.store', 'files' => true, 'enctype' => 'multipart/form-data']) }}
                        @csrf
                        @include('admin.product._form')
                        <button class="btn btn-success pull-right" type="submit" style="margin-top: 15px !important;">
                            Submit
                        </button>
                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
