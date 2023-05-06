<!-- Car Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('car_name', 'Car Name:') !!}
    {!! Form::text('car_name', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Manufacture Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('manufacture_year', 'Manufacture Year:') !!}
    {!! Form::text('manufacture_year', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Car Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('car_price', 'Car Price:') !!}
    {!! Form::number('car_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Fuel Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fuel_type', 'Fuel Type:') !!}
    {!! Form::text('fuel_type', null, ['class' => 'form-control','maxlength' => 20,'maxlength' => 20]) !!}
</div>

<!-- On Sale Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('on_sale', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('on_sale', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('on_sale', 'On Sale', ['class' => 'form-check-label']) !!}
    </div>
	
	<div class="form-group col-sm-6">
		{!! Form::label('carimage', 'Car Image:') !!}
		{!! Form::file('carimage', null, ['class' => 'form-control','id'=>'carimage']) !!}
	</div>	
</div>
