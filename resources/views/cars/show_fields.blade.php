<!-- Car Name Field -->
<div class="col-sm-12">
    {!! Form::label('car_name', 'Car Name:') !!}
    <p>{{ $car->car_name }}</p>
</div>

<!-- Manufacture Year Field -->
<div class="col-sm-12">
    {!! Form::label('manufacture_year', 'Manufacture Year:') !!}
    <p>{{ $car->manufacture_year }}</p>
</div>

<!-- Car Price Field -->
<div class="col-sm-12">
    {!! Form::label('car_price', 'Car Price:') !!}
    <p>{{ $car->car_price }}</p>
</div>

<!-- Fuel Type Field -->
<div class="col-sm-12">
    {!! Form::label('fuel_type', 'Fuel Type:') !!}
    <p>{{ $car->fuel_type }}</p>
</div>

<!-- On Sale Field -->
<div class="col-sm-12">
    {!! Form::label('on_sale', 'On Sale:') !!}
    <p>{{ $car->on_sale }}</p>
</div>

