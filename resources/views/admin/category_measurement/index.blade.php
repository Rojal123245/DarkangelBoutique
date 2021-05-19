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

                            <a href="{{route('categorymeasure.create')}}" class="btn btn-primary mt-5">Create Category Measurement</a>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Category Id</th>
                                    <th>Measurement</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($category_measure as $cat_measure)
                                    <tr>
                                        <td>{{$cat_measure->category_id}}</td>
{{--                                        <td>{{$cat_measure->measurement_column}}</td>--}}
                                        <td>
                                            @foreach ($cat_measure->measurement_column as $column)
                                               {{$loop->first ? '' : ', '}}
                                                {{ $column }}
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{route('categorymeasure.edit', $cat_measure->id)}}" class="btnEditDep btn btn-primary btn-xs"  title="Update items">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="{{route('categorymeasure.destroy',$cat_measure->id)}}" >
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
