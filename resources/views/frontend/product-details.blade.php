@extends('layout')

@section('content')
    <!-- Product Details Area Start -->
    <div class="single-product-area section-padding-100 clearfix">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mt-50">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Furniture</a></li>
                            <li class="breadcrumb-item"><a href="#">Chairs</a></li>
                            <li class="breadcrumb-item active" aria-current="page">white modern chair</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="single_product_thumb">
                        <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url({{asset('multiImages/' . json_decode($product->prod_img)[0])}});">
                                </li>
                                <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url({{asset('multiImages/' . json_decode($product->prod_img)[1])}});">
                                </li>
                                <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url({{asset('multiImages/' . json_decode($product->prod_img)[2])}});">
                                </li>
                                <li data-target="#product_details_slider" data-slide-to="3" style="background-image: url({{asset('multiImages/' . json_decode($product->prod_img)[3])}});">
                                </li>
                            </ol>

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a class="gallery_img" href="{{asset('multiImages/' . json_decode($product->prod_img)[0])}}">
                                        <img class="d-block w-100" src="{{asset('multiImages/' . json_decode($product->prod_img)[0])}}" alt="First slide">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a class="gallery_img" href="{{asset('multiImages/' . json_decode($product->prod_img)[1])}}">
                                        <img class="d-block w-100" src="{{asset('multiImages/' . json_decode($product->prod_img)[1])}}" alt="Second slide">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a class="gallery_img" href="{{asset('multiImages/' . json_decode($product->prod_img)[2])}}">
                                        <img class="d-block w-100" src="{{asset('multiImages/' . json_decode($product->prod_img)[2])}}" alt="Third slide">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a class="gallery_img" href="{{asset('multiImages/' . json_decode($product->prod_img)[3])}}">
                                        <img class="d-block w-100" src="{{asset('multiImages/' . json_decode($product->prod_img)[3])}}" alt="Fourth slide">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="single_product_desc">
                        <!-- Product Meta Data -->
                        <div class="product-meta-data">
                            <div class="line"></div>
                            <p class="product-price">Rs {{$product->prod_price}}</p>
                            <a href="product-details.html">
                                <h6>{{$product->prod_name}}</h6>
                                <h5>#{{$product->uniqueCode}}{{$product->id}}</h5>
                            </a>
                            <!-- Ratings & Review -->
                            <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                                <div class="ratings">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
{{--                                <div class="review">--}}
{{--                                    <a href="#" onclick="createReview();">Write A Review</a>--}}
{{--                                </div>--}}
                            </div>
                            <!-- Avaiable -->
                            @if($product->status == "InStock")
                                <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                            @else
                                <p class="avaibility"><i class="fa fa-circle-o"></i> Out of Stock</p>
                            @endif
                        </div>

                        <div class="short_overview my-5">
                            <p>{{$product->prod_desc}}</p>
                        </div>
                        <div id="newElementId" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
                        {{ Form::open(['route'=>'measure.save']) }}
                            @csrf
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="formGroupExampleInput" name="product_id" value="{{$product->id}}">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="formGroupExampleInput" name="category_id" value="{{$product->category_id}}">
                        </div>
                            @foreach($category_measure as $cat_measure)
                                @foreach($cat_measure->measurement_column as $column)
                            <div class="form-group">
                                <label for="formGroupExampleInput">{{ucwords(str_replace("_"," ",$column))}}</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="{{$column}}" placeholder="Enter {{ucwords(str_replace("_"," ",$column))}}">
                            </div>
                                @endforeach
                            @endforeach
                                <button class="btn btn-success pull-right" type="submit" style="margin-top: 15px !important;">
                                    Submit
                                </button>
                        {{ Form::close() }}
                        <!-- Add to Cart Form -->
                       {{-- <form class="cart clearfix" method="post">
                            <div class="cart-btn d-flex mb-50">
                                <p>Qty</p>
                                <div class="quantity">
                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                    <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">
                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <button type="submit" name="addtocart" value="5" class="btn amado-btn">Add to cart</button>
                        </form>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Details Area End -->
    </div>
    <style>

    </style>
    <script type="text/JavaScript">
        function createReview() {
            // First create a DIV element.
            var txtNewInputBox = document.createElement('div');

            // Then add the content (a new input box) of the element.
            txtNewInputBox.innerHTML = "<link href=\"https://fonts.googleapis.com/css?family=Montserrat|Montserrat+Alternates|Montserrat+Subrayada|Ranga&display=swap\" rel=\"stylesheet\"><form method='POST' > <textarea id=\"field\" placeholder=\"Type Here\" maxlength=\"3000\" rows=\"10\" cols=\"40\"></textarea><div class=\"message\"></div><button class=\"btn btn-success pull-right\" type=\"submit\" style=\"margin-top: 15px !important;\"> Submit </button></form>";

            // Finally put it where it is supposed to appear.
            document.getElementById("newElementId").appendChild(txtNewInputBox);
        }
    </script>
    @endsection


