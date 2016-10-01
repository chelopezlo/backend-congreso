<li class="<?php echo e(Request::is('activityTypes*') ? 'active' : ''); ?>">
    <a href="<?php echo route('activityTypes.index'); ?>"><i class="fa fa-edit"></i><span>ActivityTypes</span></a>
</li>

<li class="<?php echo e(Request::is('regions*') ? 'active' : ''); ?>">
    <a href="<?php echo route('regions.index'); ?>"><i class="fa fa-edit"></i><span>Regions</span></a>
</li>

<li class="<?php echo e(Request::is('provincias*') ? 'active' : ''); ?>">
    <a href="<?php echo route('provincias.index'); ?>"><i class="fa fa-edit"></i><span>Provincias</span></a>
</li>

<li class="<?php echo e(Request::is('comunas*') ? 'active' : ''); ?>">
    <a href="<?php echo route('comunas.index'); ?>"><i class="fa fa-edit"></i><span>Comunas</span></a>
</li>

<li class="<?php echo e(Request::is('iglesias*') ? 'active' : ''); ?>">
    <a href="<?php echo route('iglesias.index'); ?>"><i class="fa fa-edit"></i><span>Iglesias</span></a>
</li>

<li class="<?php echo e(Request::is('personas*') ? 'active' : ''); ?>">
    <a href="<?php echo route('personas.index'); ?>"><i class="fa fa-edit"></i><span>Personas</span></a>
</li>

<li class="<?php echo e(Request::is('inscripcions*') ? 'active' : ''); ?>">
    <a href="<?php echo route('inscripcions.index'); ?>"><i class="fa fa-edit"></i><span>Inscripcions</span></a>
</li>

<li class="<?php echo e(Request::is('userTypes*') ? 'active' : ''); ?>">
    <a href="<?php echo route('userTypes.index'); ?>"><i class="fa fa-edit"></i><span>UserTypes</span></a>
</li>

<li class="<?php echo e(Request::is('userActivityTemplates*') ? 'active' : ''); ?>">
    <a href="<?php echo route('userActivityTemplates.index'); ?>"><i class="fa fa-edit"></i><span>UserActivityTemplates</span></a>
</li>

<li class="<?php echo e(Request::is('activities*') ? 'active' : ''); ?>">
    <a href="<?php echo route('activities.index'); ?>"><i class="fa fa-edit"></i><span>Activities</span></a>
</li>

<li class="<?php echo e(Request::is('userActivities*') ? 'active' : ''); ?>">
    <a href="<?php echo route('userActivities.index'); ?>"><i class="fa fa-edit"></i><span>UserActivities</span></a>
</li>

<li class="<?php echo e(Request::is('activitySchedules*') ? 'active' : ''); ?>">
    <a href="<?php echo route('activitySchedules.index'); ?>"><i class="fa fa-edit"></i><span>ActivitySchedules</span></a>
</li>

<li class="<?php echo e(Request::is('despositos*') ? 'active' : ''); ?>">
    <a href="<?php echo route('despositos.index'); ?>"><i class="fa fa-edit"></i><span>Despositos</span></a>
</li>

