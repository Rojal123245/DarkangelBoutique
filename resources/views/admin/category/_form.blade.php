
<div class="basic-tb-hd">
    <h2>Create a Category</h2>
    <p>Fill the form to create a new category.</p>
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
                {{ Form::text('category_name', null, ['class'=>'form-control', 'placeholder'=>'Enter Category Name', 'id' => '', 'required' => '']) }}
            </div>
        </div>
    </div>

</div>





