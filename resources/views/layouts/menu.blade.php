<li class="{{ Request::is('activityTypes*') ? 'active' : '' }}">
    <a href="{!! route('activityTypes.index') !!}"><i class="fa fa-edit"></i><span>ActivityTypes</span></a>
</li>

<li class="{{ Request::is('personas*') ? 'active' : '' }}">
    <a href="{!! route('personas.index') !!}"><i class="fa fa-edit"></i><span>Personas</span></a>
</li>

<li class="{{ Request::is('userActivities*') ? 'active' : '' }}">
    <a href="{!! route('userActivities.index') !!}"><i class="fa fa-edit"></i><span>UserActivities</span></a>
</li>

<li class="{{ Request::is('activitySchedules*') ? 'active' : '' }}">
    <a href="{!! route('activitySchedules.index') !!}"><i class="fa fa-edit"></i><span>ActivitySchedules</span></a>
</li>

<li class="{{ Request::is('despositos*') ? 'active' : '' }}">
    <a href="{!! route('despositos.index') !!}"><i class="fa fa-edit"></i><span>Despositos</span></a>
</li>


<li class="{{ Request::is('activities*') ? 'active' : '' }}">
    <a href="{!! route('activities.index') !!}"><i class="fa fa-edit"></i><span>Activities</span></a>
</li>

<li class="{{ Request::is('personas*') ? 'active' : '' }}">
    <a href="{!! route('personas.index') !!}"><i class="fa fa-edit"></i><span>Personas</span></a>
</li>

