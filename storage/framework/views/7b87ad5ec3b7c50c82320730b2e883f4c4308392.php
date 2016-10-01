<table class="table table-responsive" id="activities-table">
    <thead>
        <th>Name</th>
        <th>Description</th>
        <th>Color</th>
        <th>Icon</th>
        <th>Is Selectable</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($activities as $activity): ?>
        <tr>
            <td><?php echo $activity->name; ?></td>
            <td><?php echo $activity->description; ?></td>
            <td><?php echo $activity->color; ?></td>
            <td><?php echo $activity->icon; ?></td>
            <td><?php echo $activity->is_selectable; ?></td>
            <td><?php echo $activity->created_at; ?></td>
            <td><?php echo $activity->updated_at; ?></td>
            <td>
                <?php echo Form::open(['route' => ['activities.destroy', $activity->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('activities.show', [$activity->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('activities.edit', [$activity->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>