<table class="table table-responsive" id="personas-table">
    <thead>
        <th>Rut</th>
        <th>Code</th>        
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
    <?php foreach($personas as $persona): ?>
        <tr>
            <td><?php echo $persona->rut; ?></td>
            <td><?php echo $persona->code; ?></td>
            <td><?php echo $persona->full_name; ?></td>
            <td><?php echo $persona->gender; ?></td>
            <td><?php echo $persona->birthday; ?></td>
            <td><?php echo $persona->occupation; ?></td>
            <td><?php echo $persona->address; ?></td>
            <td><?php echo $persona->phone; ?></td>
            <td><?php echo $persona->email; ?></td>
            <td><?php echo $persona->description; ?></td>
            <td><?php echo $persona->facebook; ?></td>
            <td><?php echo $persona->twitter; ?></td>
            <td><?php echo $persona->users_id; ?></td>
            <td><?php echo $persona->is_leader; ?></td>
            <td><?php echo $persona->iglesias_id; ?></td>
            <td><?php echo $persona->created_at; ?></td>
            <td><?php echo $persona->updated_at; ?></td>
            <td>
                <?php echo Form::open(['route' => ['personas.destroy', $persona->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('personas.show', [$persona->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('personas.edit', [$persona->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>