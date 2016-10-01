<!-- Order Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('order', 'Order:'); ?>

    <?php echo Form::number('order', null, ['class' => 'form-control']); ?>

</div>

<!-- Is Registered Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('is_registered', 'Is Registered:'); ?>

    <label class="radio-inline">
        <?php echo Form::radio('is_registered', "1", null); ?> 1
    </label>
    <label class="radio-inline">
        <?php echo Form::radio('is_registered', "0", null); ?> 0
    </label>
</div>

<!-- Registrarion Date Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('registrarion_date', 'Registrarion Date:'); ?>

    <?php echo Form::date('registrarion_date', null, ['class' => 'form-control']); ?>

</div>

<!-- Registrated By Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('registrated_by', 'Registrated By:'); ?>

    <?php echo Form::text('registrated_by', null, ['class' => 'form-control']); ?>

</div>

<!-- Persona Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('persona_id', 'Persona Id:'); ?>

    <?php echo Form::number('persona_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Activity Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('activity_id', 'Activity Id:'); ?>

    <?php echo Form::number('activity_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('userActivities.index'); ?>" class="btn btn-default">Cancel</a>
</div>
