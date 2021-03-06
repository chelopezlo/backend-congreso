<!-- Rut Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('rut', 'Rut:'); ?>

    <?php echo Form::text('rut', null, ['class' => 'form-control']); ?>

</div>

<!-- Rut Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('code', 'Code:'); ?>

    <?php echo Form::text('code', null, ['class' => 'form-control']); ?>

</div>

<!-- Full Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('full_name', 'Full Name:'); ?>

    <?php echo Form::text('full_name', null, ['class' => 'form-control']); ?>

</div>

<!-- Birthday Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('birthday', 'Birthday:'); ?>

    <?php echo Form::date('birthday', null, ['class' => 'form-control']); ?>

</div>

<!-- Occupation Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('occupation', 'Occupation:'); ?>

    <?php echo Form::text('occupation', null, ['class' => 'form-control']); ?>

</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('address', 'Address:'); ?>

    <?php echo Form::text('address', null, ['class' => 'form-control']); ?>

</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('phone', 'Phone:'); ?>

    <?php echo Form::text('phone', null, ['class' => 'form-control']); ?>

</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('description', 'Description:'); ?>

    <?php echo Form::textarea('description', null, ['class' => 'form-control']); ?>

</div>

<!-- Gender Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('gender', 'Gender:'); ?>

    <label class="radio-inline">
        <?php echo Form::radio('gender', 1, null); ?> Masculino
    </label>
    <label class="radio-inline">
        <?php echo Form::radio('gender', 0, null); ?> Femenino
    </label>
</div>

<!-- Facebook Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('facebook', 'Facebook:'); ?>

    <?php echo Form::text('facebook', null, ['class' => 'form-control']); ?>

</div>

<!-- Twitter Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('twitter', 'Twitter:'); ?>

    <?php echo Form::text('twitter', null, ['class' => 'form-control']); ?>

</div>

<!-- Is Leader Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('is_leader', 'Is Leader:'); ?>

    <label class="radio-inline">
        <?php echo Form::radio('is_leader', "1", null); ?> S&iacute;
    </label>
    <label class="radio-inline">
        <?php echo Form::radio('is_leader', "0", null); ?> No
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('personas.index'); ?>" class="btn btn-default">Cancel</a>
</div>
