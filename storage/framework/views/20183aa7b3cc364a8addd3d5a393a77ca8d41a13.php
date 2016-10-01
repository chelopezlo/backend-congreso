<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Name:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('description', 'Description:'); ?>

    <?php echo Form::text('description', null, ['class' => 'form-control']); ?>

</div>

<!-- Color Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('color', 'Color:'); ?>

    <?php echo Form::text('color', null, ['class' => 'form-control']); ?>

</div>

<!-- Icon Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('icon', 'Icon:'); ?>

    <?php echo Form::text('icon', null, ['class' => 'form-control']); ?>

</div>

<!-- Is Selectable Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('is_selectable', 'Is Selectable:'); ?>

    <label class="radio-inline">
        <?php echo Form::radio('is_selectable', "1", null); ?> 1
    </label>
    <label class="radio-inline">
        <?php echo Form::radio('is_selectable', "0", null); ?> 0
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('activities.index'); ?>" class="btn btn-default">Cancel</a>
</div>
