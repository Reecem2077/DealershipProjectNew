<!-- Sale Price Field -->
<div class="col-sm-12">
    {!! Form::label('sale_price', 'Sale Price:') !!}
    <p>{{ $sale->sale_price }}</p>
</div>

<!-- Sale Date Field -->
<div class="col-sm-12">
    {!! Form::label('sale_date', 'Sale Date:') !!}
    <p>{{ $sale->sale_date }}</p>
</div>

<!-- Customer Id Field -->
<div class="col-sm-12">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <p>{{ $sale->customer_id }}</p>
</div>

<!-- Customer Name Field -->
<div class="col-sm-12">
    {!! Form::label('customer_name', 'Customer Name:') !!}
    <p>{{ $sale->customer_name }}</p>
</div>

<!-- Payment Type Field -->
<div class="col-sm-12">
    {!! Form::label('payment_type', 'Payment Type:') !!}
    <p>{{ $sale->payment_type }}</p>
</div>

