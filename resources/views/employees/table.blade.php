<div class="table-responsive">
    <table class="table" id="employees-table">
        <thead>
        <tr>
		<th>Employee ID</th>
            <th>Firstname</th>
        <th>Surname</th>
        <th>Employee type</th>
        <th>Dateofbirth</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
			<td>{{ $employee->id }}</td>
                <td>{{ $employee->firstname }}</td>
            <td>{{ $employee->surname }}</td>
            <td>{{ $employee->employeetype }}</td>
            <td>{{ $employee->dateofbirth }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['employees.destroy', $employee->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('employees.show', [$employee->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('employees.edit', [$employee->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
