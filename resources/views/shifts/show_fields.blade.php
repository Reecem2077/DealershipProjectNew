<!-- Employee Id Field -->
<div class="col-sm-12">
    {!! Form::label('employee_id', 'Employee Id:') !!}
    <p>{{ $shift->employee_id }}</p>
</div>

<!-- Day Of Week Field -->
<div class="col-sm-12">
    {!! Form::label('day_of_week', 'Day Of Week:') !!}
    <p>{{ $shift->day_of_week }}</p>
</div>

<!-- Start Time Field -->
<div class="col-sm-12">
    {!! Form::label('start_time', 'Start Time:') !!}
    <p>{{ $shift->start_time }}</p>
</div>

<!-- End Time Field -->
<div class="col-sm-12">
    {!! Form::label('end_time', 'End Time:') !!}
    <p>{{ $shift->end_time }}</p>
</div>

