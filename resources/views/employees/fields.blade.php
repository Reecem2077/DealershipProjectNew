<!-- Firstname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('firstname', 'Firstname:') !!}
    {!! Form::text('firstname', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Surname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surname', 'Surname:') !!}
    {!! Form::text('surname', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Employeetype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('employeetype', 'Employeetype:') !!}
    {!! Form::text('employeetype', null, ['class' => 'form-control','maxlength' => 20,'maxlength' => 20]) !!}
</div>

<!-- Dateofbirth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateofbirth', 'Dateofbirth:') !!}
    {!! Form::text('dateofbirth', null, ['class' => 'form-control','id'=>'dateofbirth']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#dateofbirth').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush