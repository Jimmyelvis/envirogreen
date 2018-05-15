
<div class="form-entry">
  {!! Form::text('city', null, ['required autocomplete' => 'off'])!!}
  {!! Form::label('city', 'City:') !!}
</div>

<div class="form-entry">
  {!! Form::text('state', null, ['required autocomplete' => 'off'])!!}
  {!! Form::label('state', 'State:') !!}
</div>

<div class="form-entry">
  {!! Form::text('price', null, ['required autocomplete' => 'off'])!!}
  {!! Form::label('price', 'Price:') !!}
</div>

<div class="form-entry">
  {!! Form::text('beds', null, ['required autocomplete' => 'off'])!!}
  {!! Form::label('beds', 'Beds:') !!}
</div>

<div class="form-entry">
  {!! Form::text('baths', null, ['required autocomplete' => 'off'])!!}
  {!! Form::label('baths', 'Baths:') !!}
</div>

<div class="form-entry">
  {!! Form::text('sqft', null, ['required autocomplete' => 'off'])!!}
  {!! Form::label('sqft', 'Square Feet:') !!}
</div>

<div class="form-entry select-label">
     {!! Form::select('category_id',[''=>'Category:'] + $catagories, null, ['required autocomplete' => 'off'],['class'=>'select'])!!}
</div>

<div class="form-descrip">

  {!! Form::label('descrip', 'Description:') !!}
  {!! Form::textarea('descrip', null, [
    'required autocomplete' => 'off',
    'rows' => '4',
    'cols' => '20',
    'wrap' => 'hard',
  ])!!}

</div>




<!-- ///right side -->


<div class="col-md-6">

    <div class="form-photo">
      {!! Form::label('photo_id', 'Full Pic:', ['class'=>'form-photo-label']) !!}
      {!! Form::file('photo_id', null, ['class'=>'btn btn-upload'])!!}
   </div>

   <div class="row">

       <div class="col-md-6">
         <div class="extra form-photo">
           {!! Form::label('extrapic_id_one', 'Extra Pic 1:', ['class'=>'form-photo-label']) !!}
           {!! Form::file('extrapic_id_one', null, ['class'=>'btn btn-upload'])!!}
        </div>

       </div>

       <div class="col-md-6">
         <div class="extra form-photo">
           {!! Form::label('extrapic_id_two', 'Extra Pic 2:', ['class'=>'form-photo-label']) !!}
           {!! Form::file('extrapic_id_two', null, ['class'=>'btn btn-upload'])!!}
        </div>

       </div>

   </div>

   <div class="row">

       <div class="col-md-6">
         <div class="extra form-photo">
           {!! Form::label('extrapic_id_three', 'Extra Pic 3:', ['class'=>'form-photo-label']) !!}
           {!! Form::file('extrapic_id_three', null, ['class'=>'btn btn-upload'])!!}
        </div>

       </div>

       <div class="col-md-6">
         <div class="extra form-photo">
           {!! Form::label('extrapic_id_four', 'Extra Pic 4:', ['class'=>'form-photo-label']) !!}
           {!! Form::file('extrapic_id_four', null, ['class'=>'btn btn-upload'])!!}
        </div>

       </div>

   </div>


    <div class="form-group">
      {!! Form::submit('Create Listing', ['class'=>'btn btn-submit pull-right']) !!}
   </div>

</div>
