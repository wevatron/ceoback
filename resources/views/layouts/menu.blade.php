
<li class="{{ Request::is('tEventos*') ? 'active' : '' }}">
    <a href="{{ route('tEventos.index') }}"><i class="fa fa-edit"></i><span>Eventos</span></a>
</li>


{{-- <li class="{{ Request::is('tPersonas*') ? 'active' : '' }}">
    <a href="{{ route('tPersonas.index') }}"><i class="fa fa-edit"></i><span>Tabla de usuarios</span></a>
</li> --}}


<li class="{{ Request::is('cGiroNegocios*') ? 'active' : '' }}">
    <a href="{{ route('cGiroNegocios.index') }}"><i class="fa fa-edit"></i><span>Negocios</span></a>
</li>


<li class="{{ Request::is('cTipoUsuarios*') ? 'active' : '' }}">
    <a href="{{ route('cTipoUsuarios.index') }}"><i class="fa fa-edit"></i><span>Catálogo tipo usuarios</span></a>
</li>

<li class="{{ Request::is('cUniversidads*') ? 'active' : '' }}">
    <a href="{{ route('cUniversidads.index') }}"><i class="fa fa-edit"></i><span>Catálogo de universidades</span></a>
</li>

<li class="{{ Request::is('cTipoEventos*') ? 'active' : '' }}">
    <a href="{{ route('cTipoEventos.index') }}"><i class="fa fa-edit"></i><span>Catálogo de Eventos</span></a>
</li>


<li class="{{ Request::is('cMunicipios*') ? 'active' : '' }}">
    <a href="{{ route('cMunicipios.index') }}"><i class="fa fa-edit"></i><span>Catálogo de Municipios</span></a>
</li>

