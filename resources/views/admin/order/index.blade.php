@extends('welcome')
@section('page_title', $page['page_title'])
@section('admincontent')
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Order Table</h2>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Code</th>
                                    <th>Categories</th>
                                    <th>Customer FullName</th>
                                    <th>Customer ContactNo</th>
                                    <th>Measurement</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($measurement as $measure)
                                    <tr>
                                        <td>{{$measure->Product_name}}</td>
                                        <td>{{$measure->Product_code}}</td>
                                        <td>{{$measure->category}}</td>
                                        <td>{{$measure->customer_fullname}}</td>
                                        <td>{{$measure->customer_number}}</td>
                                        <td>
                                        @foreach($allMeasure->measurement_column as $category)
                                            <b>{{ucwords(str_replace("_"," ","$category"))}}: </b>{{$measure->$category}}<br>
                                        @endforeach
                                            </td>
                                        <td>{{$measure->status}}</td>
                                        <td>
                                            <a href="{{route('prod.edit', $measure->id)}}" class="btnEditDep btn btn-primary btn-xs"  title="Update items">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="{{route('prod.destroy',$measure->id)}}" >
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
