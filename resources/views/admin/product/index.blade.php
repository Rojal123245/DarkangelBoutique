@extends('welcome')
@section('page_title', $page['page_title'])
@section('admincontent')
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Basic Example</h2>
                            <p>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Product type</th>
                                    <th>Description</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($product as $prod)
                                <tr>
                                    <td>{{$prod->prod_name}}</td>
                                    <td>{{$prod->prod_price}}</td>
                                    <td>{{$prod->prod_type}}</td>
                                    <td>{{$prod->prod_desc}}</td>
                                    <td>{{$prod->status}}</td>
                                    <td>
                                        <a href="" class="btnEditDep btn btn-primary btn-xs"  title="Update items">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="" >
                                            <button class="btn btn-danger btn-xs">
                                                <i class="fa fa-trash-o "></i></button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
