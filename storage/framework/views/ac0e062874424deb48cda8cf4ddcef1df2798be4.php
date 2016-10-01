<table class="table table-responsive" id="iglesias-table">
    <thead>
        <th>Name</th>
        <th>Pastor</th>
        <th>Description</th>
        <th>Phone</th>
        <th>Comuna Id</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($iglesias as $iglesia): ?>
        <tr>
            <td><?php echo $iglesia->name; ?></td>
            <td><?php echo $iglesia->pastor; ?></td>
            <td><?php echo $iglesia->description; ?></td>
            <td><?php echo $iglesia->phone; ?></td>
            <td><?php echo $iglesia->comuna_id; ?></td>
            <td><?php echo $iglesia->created_at; ?></td>
            <td><?php echo $iglesia->updated_at; ?></td>
            <td>
                <?php echo Form::open(['route' => ['iglesias.destroy', $iglesia->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('iglesias.show', [$iglesia->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('iglesias.edit', [$iglesia->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>