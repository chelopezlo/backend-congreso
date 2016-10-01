<table class="table table-responsive" id="activityTypes-table">
    <thead>
        <th>Code</th>
        <th>Name</th>
        <th>Description</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($activityTypes as $activityType): ?>
        <tr>
            <td><?php echo $activityType->code; ?></td>
            <td><?php echo $activityType->name; ?></td>
            <td><?php echo $activityType->description; ?></td>
            <td><?php echo $activityType->created_at; ?></td>
            <td><?php echo $activityType->updated_at; ?></td>
            <td>
                <?php echo Form::open(['route' => ['activityTypes.destroy', $activityType->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('activityTypes.show', [$activityType->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('activityTypes.edit', [$activityType->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>