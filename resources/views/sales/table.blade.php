<div class="table-responsive">
    <table class="table" id="sales-table">
        <thead style="background-color: #FFA500; color: white;">
        <tr>
		<th>Sale id</th>
            <th>Sale Price</th>
        <th>Sale Date</th>
        <th>Customer Id</th>
        <th>Customer Name</th>
        <th>Payment Type</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sales as $sale)
            <tr>
			<td>{{ $sale->id }}</td>
            <td>{{ $sale->sale_price }}</td>
            <td>{{ $sale->sale_date }}</td>
            <td>{{ $sale->customer_id }}</td>
            <td>{{ $sale->customer_name }}</td>
            <td>{{ $sale->payment_type }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['sales.destroy', $sale->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sales.show', [$sale->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('sales.edit', [$sale->id]) }}"
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
