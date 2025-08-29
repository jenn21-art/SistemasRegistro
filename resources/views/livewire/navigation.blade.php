<div class="collapse navbar-collapse" id="sidenav-collapse-main">
    <!-- Collapse header -->
    <div class="navbar-collapse-header d-md-none">
        <div class="row">
            <div class="col-6 collapse-brand">
                <a href="#">
                    <img src="{{ asset('img/brand/blue.png') }}">
                </a>
            </div>
            <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main"
                    aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
    <!-- Navigation -->
    <ul class="navbar-nav">
        <li class="nav-item {{ Request::route()->named('dashboard') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('dashboard') ? 'active' : '' }}"
                href="{{ route('dashboard') }}" wire:navigate>
                <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
        </li>
    </ul>
    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Panel de Administración</h6>
    <ul class="navbar-nav">
        <li class="nav-item {{ Request::route()->named('ejemplo.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('ejemplo.index') ? 'active' : '' }}"
                href="{{ route('ejemplo.index') }}" wire:navigate>
                <i class="fas fa-book text-purple"></i> Ejemplo
            </a>
        </li>
    </ul>
    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Otras Acciones</h6>
    <!-- Navigation -->
    <ul class="navbar-nav mb-md-3">
        <li class="nav-item {{ Request::route()->named('profile.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('profile.index') ? 'active' : '' }}"
                href="{{ route('profile.index') }}" wire:navigate>
                <i class="fas fa-user text-blue"></i> Perfil
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt text-gray"></i> Cerrar Sesión
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>

    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Ejemplos</h6>
    <!-- Navigation -->
    <ul class="navbar-nav mb-md-3">
        <li class="nav-item {{ Request::route()->named('categories.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('categories.index') ? 'active' : '' }}"
                href="{{ route('categories.index') }}" wire:navigate>
                <i class="fas fa-tags text-yellow"></i> Categories (Normal)
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('posts.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('posts.index') ? 'active' : '' }}"
                href="{{ route('posts.index') }}" wire:navigate>
                <i class="fas fa-newspaper text-green"></i> Posts (Relacionado)
            </a>
        </li>

>

         <li class="nav-item {{ Request::route()->named('staffs.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('staffs.index') ? 'active' : '' }}"
                href="{{ route('staffs.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> Staff
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('budgets.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('budgets.index') ? 'active' : '' }}"
                href="{{ route('budgets.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> Budget
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('customer_informations.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('customer_informations.index') ? 'active' : '' }}"
                href="{{ route('customer_informations.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> Customer_information
            </a>
        </li>

         <li class="nav-item {{ Request::route()->named('inventories.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('inventories.index') ? 'active' : '' }}"
                href="{{ route('inventories.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> Inventory
            </a>
        </li>

   
         <li class="nav-item {{ Request::route()->named('repairs.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('repairs.index') ? 'active' : '' }}"
                href="{{ route('repairs.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> repair
            </a>
        </li>

          <li class="nav-item {{ Request::route()->named('invoices.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('invoices.index') ? 'active' : '' }}"
                href="{{ route('invoices.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> invoice
            </a>
        </li>
          <li class="nav-item {{ Request::route()->named('tools.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('tools.index') ? 'active' : '' }}"
                href="{{ route('tools.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> tool
            </a>
        </li>
        <li class="nav-item {{ Request::route()->named('corrective_maintenances.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('corrective_maintenances.index') ? 'active' : '' }}"
                href="{{ route('corrective_maintenances.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> corrective_maintenance
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('mechanical_histories.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('mechanical_histories.index') ? 'active' : '' }}"
                href="{{ route('mechanical_histories.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> mechanical_history
            </a>
        </li>

        
        <li class="nav-item {{ Request::route()->named('mechanical_reports.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('mechanical_reports.index') ? 'active' : '' }}"
                href="{{ route('mechanical_reports.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> mechanical_report
            </a>
        </li>
          <li class="nav-item {{ Request::route()->named('records.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('records.index') ? 'active' : '' }}"
                href="{{ route('records.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> record
            </a>
        </li>
    </ul>
</div>
