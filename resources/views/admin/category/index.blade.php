@extends('welcome')
@section('page_title', $page['page_title'])
@section('admincontent')
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Category Table</h2>

                            <a href="{{route('category.create')}}" class="btn btn-primary mt-5">Create Category</a>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->category_name}}</td>
                                        <td>
                                            <a href="{{route('category.edit', $category->id)}}" class="btnEditDep btn btn-primary btn-xs"  title="Update items">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="{{route('category.destroy',$category->id)}}" >
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
