<div class="table-responsive">
    <table class="table" id="shifts-table">
        <thead style="background-color: #FFCF40; color: white;">
        <tr>
		<th>Shift Id</th>
            <th>Employee Id</th>
        <th>Day Of Week</th>
        <th>Start Time</th>
        <th>End Time</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($shifts as $shift)
            <tr>
			<td>{{ $shift->id }}</td>
                <td>{{ $shift->employee_id }}</td>
            <td>{{ $shift->day_of_week }}</td>
            <td>{{ $shift->start_time }}</td>
            <td>{{ $shift->end_time }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['shifts.destroy', $shift->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('shifts.show', [$shift->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('shifts.edit', [$shift->id]) }}"
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
