<table class="table table-responsive" id="personas-table">
    <thead>
        <th>Rut</th>
        <th>QR</th>        
        <th>Nombre</th>
        <th>Genero</th>
        <th>Descripci&oacute;n</th>
        <th>L&iacute;der</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($personas as $persona)
        <tr>
            <td>{!! $persona->rut !!}</td>
            <td>{!! $persona->code !!}</td>
            <td>{!! $persona->full_name !!}</td>
            <td>{!! $persona->gender !!}</td>
            <td>{!! $persona->description !!}</td>
            <td>{!! $persona->is_leader !!}</td>
            <td>
                <div class='btn-group'>
                    <a href="{!! route('personas.show', [$persona->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('personas.edit', [$persona->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>                   
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>