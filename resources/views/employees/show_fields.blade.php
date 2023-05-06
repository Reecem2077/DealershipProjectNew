<!-- Firstname Field -->
<div class="col-sm-12">
    {!! Form::label('firstname', 'Firstname:') !!}
    <p>{{ $employee->firstname }}</p>
</div>

<!-- Surname Field -->
<div class="col-sm-12">
    {!! Form::label('surname', 'Surname:') !!}
    <p>{{ $employee->surname }}</p>
</div>

<!-- Employeetype Field -->
<div class="col-sm-12">
    {!! Form::label('employeetype', 'Employeetype:') !!}
    <p>{{ $employee->employeetype }}</p>
</div>

<!-- Dateofbirth Field -->
<div class="col-sm-12">
    {!! Form::label('dateofbirth', 'Dateofbirth:') !!}
    <p>{{ $employee->dateofbirth }}</p>
</div>

