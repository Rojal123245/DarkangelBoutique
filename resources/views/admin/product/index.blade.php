@extends('welcome')
@section('page_title', $page['page_title'])
@section('admincontent')
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Product Table</h2>

                        <a href="{{route('prod.create')}}" class="btn btn-primary mt-5">Create Product</a>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Product type</th>
                                    <th>Description</th>
                                    <th>Categories</th>
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
                                    <td>{{$prod->category->category_name}}</td>
                                    <td>{{$prod->status}}</td>
                                    <td>
                                        <a href="{{route('prod.edit', $prod->id)}}" class="btnEditDep btn btn-primary btn-xs"  title="Update items">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="{{route('prod.destroy',$prod->id)}}" >
                                            <button class="btn btn-danger btn-xs">
                                                <i class="fa fa-trash-o "></i></button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
