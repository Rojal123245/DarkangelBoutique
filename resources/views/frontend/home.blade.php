
@extends ('layout')

@section('content')
<!-- Product Catagories Area Start -->
<div class="products-catagories-area clearfix">
    <div class="amado-pro-catagory clearfix">
        @foreach($prod_data as $prod)
                <div class="single-products-catagory clearfix">
                    <a href="{{route('front.show', $prod->id)}}">
                           <img src="{{ asset('/') }}coverimg/{{$prod->cover_img}}" alt="">
                        <!-- Hover Content -->

                        <div class="hover-content">
                            <div class="line"></div>

                            <p> Rs {{$prod->prod_price}}</p>
                            <h4>{{$prod->prod_name}}</h4>

                        </div>
                    </a>
                </div>
        @endforeach

</div>
<!-- Product Catagories Area End -->
</div>

<!-- ##### Main Content Wrapper End ##### -->
@endsection
