


<div class="basic-tb-hd">
    <h2>Create a Product</h2>
    <p>Fill the form to create a new product.</p>
</div>
@if(Session::has('success'))
    <p class="text-primary small">{{Session::get('success')}}</p>
@endif
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                <i class="notika-icon notika-support"></i>
            </div>
            <div class="nk-int-st">
                {{ Form::text('prod_name', null, ['class'=>'form-control', 'placeholder'=>'Enter Product Name', 'id' => '', 'required' => '']) }}
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                <i class="notika-icon notika-mail"></i>
            </div>
            <div class="nk-int-st">
                {{ Form::text('prod_price', null, ['class'=>'form-control ', 'placeholder'=>'Enter Product price', 'id' => '', 'required' => '']) }}
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                <i class="notika-icon notika-phone"></i>
            </div>
            <div class="nk-int-st">
                {{ Form::text('prod_type', null, ['class'=>'form-control ', 'placeholder'=>'Enter Product Type', 'id' => '', 'required' => '']) }}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                <i class="notika-icon notika-map"></i>
            </div>
            <div class="nk-int-st">
                {{ Form::textarea('prod_desc', null, ['class'=>'form-control ', 'placeholder'=>'Enter Product description', 'id' => '', 'required' => '', 'rows' => 3]) }}
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                <i class="notika-icon notika-next"></i>
            </div>
            <div class="nk-int-st">
                {{ Form::text('status', null, ['class'=>'form-control ', 'placeholder'=>'Enter status', 'id' => '', 'required' => '']) }}
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

        <div class="bootstrap-select fm-cmp-mg">
            <select class="selectpicker" name="categories_id" data-live-search="true">

                @foreach($categories as $category)
                    @if(isset($product))
                          <option value="{{ $category->id }}" @if ($product->categories_id == $category->id) selected ="selected" @endif >{{ $category->category_name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
</div>





