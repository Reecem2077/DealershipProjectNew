<!-- Sale Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sale_price', 'Sale Price:') !!}
    {!! Form::number('sale_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Sale Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sale_date', 'Sale Date:') !!}
    {!! Form::text('sale_date', null, ['class' => 'form-control','id'=>'sale_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#sale_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <select name ="customerid" class="form-control">
    @foreach($customers as $customer)
        <option value='{{$customer->id}}'>{{$customer}}</option>
    @endforeach
    </select>
</div>

<!-- Customer Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_name', 'Customer Name:') !!}
    {!! Form::text('customer_name', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Payment Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_type', 'Payment Type:') !!}
    {!! Form::text('payment_type', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>