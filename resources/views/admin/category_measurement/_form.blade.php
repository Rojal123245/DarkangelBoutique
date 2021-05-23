<div class="basic-tb-hd">
    <h2>Create a Category related measurement</h2>
    <p>Fill the form to create a new Category Measurement.</p>
</div>
@if(Session::has('success'))
    <p class="text-primary small">{{Session::get('success')}}</p>
@endif

<select class="form-select" name="category_id" aria-label=" select Category">
    <option selected>Choose a Category</option>

    @foreach($categories as $category)
        @if(isset($category_measure))
    <option value="{{$category->id}}" @if ($category_measure->category_id == $category->id) selected="selected"  @endif > {{$category->category_name}}</option>
            @else
                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
            @endif
    @endforeach

</select>
<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" name="measurement_column[]" value="length" @if(isset($category_measure)) @foreach($category_measure->measurement_column as $measure) @if($measure=='length') checked @endif @endforeach @endif id="flexSwitchCheckDefault">
    <label class="form-check-label" for="flexSwitchCheckDefault">length</label>
</div>
<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" name="measurement_column[]" value="shoulder" @if(isset($category_measure)) @foreach($category_measure->measurement_column as $measure) @if($measure=='shoulder') checked @endif @endforeach @endif id="flexSwitchCheckDefault">
    <label class="form-check-label" for="flexSwitchCheckDefault">Shoulder</label>
</div>
<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" name="measurement_column[]" value="armhole" @if(isset($category_measure)) @foreach($category_measure->measurement_column as $measure) @if($measure=='armhole') checked @endif @endforeach @endif id="flexSwitchCheckDefault">
    <label class="form-check-label" for="flexSwitchCheckDefault">Arm hole</label>
</div>
<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" name="measurement_column[]" value="chest" @if(isset($category_measure)) @foreach($category_measure->measurement_column as $measure) @if($measure=='chest') checked @endif @endforeach @endif id="flexSwitchCheckDefault">
    <label class="form-check-label" for="flexSwitchCheckDefault">Chest</label>
</div>
<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" name="measurement_column[]" value="waist" @if(isset($category_measure)) @foreach($category_measure->measurement_column as $measure) @if($measure=='waist') checked @endif @endforeach @endif id="flexSwitchCheckDefault">
    <label class="form-check-label" for="flexSwitchCheckDefault">Waist</label>
</div>
<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" name="measurement_column[]" value="front_neck" @if(isset($category_measure)) @foreach($category_measure->measurement_column as $measure) @if($measure=='front_neck') checked @endif @endforeach @endif id="flexSwitchCheckDefault">
    <label class="form-check-label" for="flexSwitchCheckDefault">Front neck</label>
</div>
<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" name="measurement_column[]" value="back_neck" @if(isset($category_measure)) @foreach($category_measure->measurement_column as $measure) @if($measure=='back_neck') checked @endif @endforeach @endif id="flexSwitchCheckDefault">
    <label class="form-check-label" for="flexSwitchCheckDefault">Back neck</label>
</div>
<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" name="measurement_column[]" value="sleeve_length" @if(isset($category_measure)) @foreach($category_measure->measurement_column as $measure) @if($measure=='sleeve_length') checked @endif @endforeach @endif id="flexSwitchCheckDefault">
    <label class="form-check-label" for="flexSwitchCheckDefault">Sleeve Length</label>
</div>
<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" name="measurement_column[]" value="sleeve_round" @if(isset($category_measure)) @foreach($category_measure->measurement_column as $measure) @if($measure=='sleeve_round') checked @endif @endforeach @endif id="flexSwitchCheckDefault">
    <label class="form-check-label" for="flexSwitchCheckDefault">Sleeve round</label>
</div>
<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" name="measurement_column[]" value="hip" @if(isset($category_measure)) @foreach($category_measure->measurement_column as $measure) @if($measure=='hip') checked @endif @endforeach @endif id="flexSwitchCheckDefault">
    <label class="form-check-label" for="flexSwitchCheckDefault">Hip</label>
</div>
<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" name="measurement_column[]" value="neck" @if(isset($category_measure)) @foreach($category_measure->measurement_column as $measure) @if($measure=='neck') checked @endif @endforeach @endif id="flexSwitchCheckDefault">
    <label class="form-check-label" for="flexSwitchCheckDefault">Neck</label>
</div>
