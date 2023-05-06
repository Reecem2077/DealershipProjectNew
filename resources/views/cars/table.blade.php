<div class="table-responsive">
    <table class="table" id="cars-table">
        <thead>
        <tr>
		<th>Car id</th>
            <th>Car Name</th>
        <th>Manufacture Year</th>
        <th>Car Price</th>
        <th>Fuel Type</th>
        <th>On Sale</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cars as $car)
            <tr>
			<td>{{ $car->id }}</td>
                <td>{{ $car->car_name }}</td>
            <td>{{ $car->manufacture_year }}</td>
            <td>{{ $car->car_price }}</td>
            <td>{{ $car->fuel_type }}</td>
            <td>{{ $car->on_sale }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['cars.destroy', $car->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cars.show', [$car->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('cars.edit', [$car->id]) }}"
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
