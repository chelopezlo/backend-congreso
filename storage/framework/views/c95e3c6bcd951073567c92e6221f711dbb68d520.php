<table class="table table-responsive" id="userActivities-table">
    <thead>
        <th>Order</th>
        <th>Is Registered</th>
        <th>Registrarion Date</th>
        <th>Registrated By</th>
        <th>Persona Id</th>
        <th>Activity Id</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($userActivities as $userActivity): ?>
        <tr>
            <td><?php echo $userActivity->order; ?></td>
            <td><?php echo $userActivity->is_registered; ?></td>
            <td><?php echo $userActivity->registrarion_date; ?></td>
            <td><?php echo $userActivity->registrated_by; ?></td>
            <td><?php echo $userActivity->persona_id; ?></td>
            <td><?php echo $userActivity->activity_id; ?></td>
            <td><?php echo $userActivity->created_at; ?></td>
            <td><?php echo $userActivity->updated_at; ?></td>
            <td>
                <?php echo Form::open(['route' => ['userActivities.destroy', $userActivity->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('userActivities.show', [$userActivity->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('userActivities.edit', [$userActivity->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>