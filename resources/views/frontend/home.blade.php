
@extends ('layout')

@section('content')
<!-- Product Catagories Area Start -->
<div class="products-catagories-area clearfix">
    <div class="amado-pro-catagory clearfix">
        @foreach($prod_data as $prod)
                <div class="single-products-catagory clearfix">
                    <a href="/shop">
                        @if(count($prod->prod_img) > 1)
                            {{  $prod->prod_img }}
                        @endif
                        {{ json_decode($prod->prod_img) }}
{{--                        @foreach($prod->prod_img as $image)--}}
{{--                            <img src="{{ $image }}" alt="">--}}
{{--                        <!-- Hover Content -->--}}
{{--                        @endforeach--}}
                        <div class="hover-content">
                            <div class="line"></div>

                            <p>{{$prod->prod_price}}</p>
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
