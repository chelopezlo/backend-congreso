<table class="table table-responsive" id="personas-table">
    <thead>
        <th>Rut</th>
        <th>Full Name</th>
        <th>Gender</th>
        <th>Birthday</th>
        <th>Occupation</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Description</th>
        <th>Facebook</th>
        <th>Twitter</th>
        <th>Users Id</th>
        <th>Is Leader</th>
        <th>Iglesias Id</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($personas as $persona)
        <tr>
            <td>{!! $persona->rut !!}</td>
            <td>{!! $persona->full_name !!}</td>
            <td>{!! $persona->gender !!}</td>
            <td>{!! $persona->birthday !!}</td>
            <td>{!! $persona->occupation !!}</td>
            <td>{!! $persona->address !!}</td>
            <td>{!! $persona->phone !!}</td>
            <td>{!! $persona->email !!}</td>
            <td>{!! $persona->description !!}</td>
            <td>{!! $persona->facebook !!}</td>
            <td>{!! $persona->twitter !!}</td>
            <td>{!! $persona->users_id !!}</td>
            <td>{!! $persona->is_leader !!}</td>
            <td>{!! $persona->iglesias_id !!}</td>
            <td>{!! $persona->created_at !!}</td>
            <td>{!! $persona->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['personas.destroy', $persona->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('personas.show', [$persona->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('personas.edit', [$persona->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>