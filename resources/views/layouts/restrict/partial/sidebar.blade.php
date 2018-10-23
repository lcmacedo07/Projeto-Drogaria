<div class="sidebar" data-color="purple" data-background-color="black" data-image="{{ asset('assets/backend/img/sidebar-2.jpg') }}">

    <div class="logo">
        <a href="#" class="simple-text logo-normal">

        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/home') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            
            @if( Gate::check('STORE') 
            )
            
            @can('STORE')<li class="nav-item ">
                <a class="nav-link" href="{{ url('restrict/stores') }}">
                    <i class="material-icons">home</i>
                    <p>Loja</p>
                </a>
            </li>@endcan
            
            @endif
            
            
            @if( Gate::check('PAYMANTS-TYPES') 
            || Gate::check('PAYMANTS') 
            || Gate::check('CREDITS-TYPES') 
            || Gate::check('CREDITS') 
            || Gate::check('SERVICES') 
            || Gate::check('BUDGETS') 
            ) 
            
            <li class="nav-item ">
                <a class="nav-link"  data-toggle="dropdown" href="#">
                    <i class="material-icons">money</i>
                    <p>Financeiro</p>
                </a>
                <ul class="dropdown-menu">
                    @can('PAYMANTS-TYPES')<li><a href="{{ url('restrict/paymants_types') }}">Pagamentos (Categorias)</a></li>@endcan
                    @can('PAYMANTS')<li><a href="{{ url('restrict/paymants') }}">Pagamentos</a></li>@endcan
                    @can('CREDITS-TYPES')<li><a href="{{ url('restrict/credits_types') }}">Recebimentos (Categorias)</a></li>@endcan
                    @can('CREDITS')<li><a href="{{ url('restrict/credits') }}">Recebimentos</a></li>@endcan
                    @can('SERVICES')<li><a href="{{ url('restrict/services') }}">Serviços</a></li>@endcan
                    @can('BUDGETS')<li><a href="{{ url('restrict/budgets') }}">Orçamentos</a></li>@endcan
                </ul>
            </li>
            
            @endif
            
            
            @if( Gate::check('CONVEYORS') 
            ) 
            
            <li class="nav-item ">
                <a class="nav-link"  data-toggle="dropdown" href="#">
                    <i class="material-icons">local_shipping</i>
                    <p>Transportadoras</p>
                </a>
                <ul class="dropdown-menu">
                    @can('CONVEYORS')<li><a href="{{ url('restrict/conveyors') }}">Transportadoras</a></li>@endcan
                    @can('CONVEYORS')<li><a href="{{ url('restrict/inputs') }}">Entradas</a></li>@endcan
                    @can('CONVEYORS')<li><a href="{{ url('restrict/exits') }}">Saidas</a></li>@endcan
                </ul>
            </li>
            
            @endif
            
            
            @if( Gate::check('PRODUCTS') 
            || Gate::check('CATEGORYS') 
            ) 
            
            <li class="nav-item ">
                <a class="nav-link"  data-toggle="dropdown" href="#">
                    <i class="material-icons">business_center</i>
                    <p>Produtos</p>
                </a>
                <ul class="dropdown-menu">
                    @can('PRODUCTS')<li><a href="{{ url('restrict/products') }}">Produtos</a></li>@endcan
                    @can('CATEGORYS')<li><a href="{{ url('restrict/categorys') }}">Categorias</a></li>@endcan
                    @can('CATEGORYS')<li><a href="{{ url('restrict/item_inputs') }}">Item das Entradas</a></li>@endcan
                    @can('CATEGORYS')<li><a href="{{ url('restrict/item_exits') }}">Item das Saidas</a></li>@endcan
                </ul>
            </li>
            
            @endif
            
            @if( Gate::check('PROVIDERS') 
            ) 
            
            @can('PROVIDERS')<li class="nav-item ">
                <a class="nav-link" href="{{ url('restrict/providers') }}">
                    <i class="material-icons">library_books</i>
                    <p>Forncedores</p>
                </a>
            </li>@endcan
            
            @endif
            
            @if( Gate::check('CITYS') 
            ) 
            
            @can('CITYS')<li class="nav-item ">
                <a class="nav-link" href="{{ url('restrict/citys') }}">
                    <i class="material-icons">location_city</i>
                    <p>Cidades</p>
                </a>
            </li>@endcan
            
            @endif
            
            @if( Gate::check('PURCHASES') 
            || Gate::check('SALES') 
            || Gate::check('STOCKS') 
            ) 
            
            <li class="nav-item ">
                <a class="nav-link"  data-toggle="dropdown" href="#">
                    <i class="material-icons">content_paste</i>
                    <p>Relatorios</p>
                </a>
                <ul class="dropdown-menu">
                    @can('PURCHASES')<li><a href="{{ url('restrict/purchases') }}">Compras</a></li>@endcan
                    @can('SALES')<li><a href="{{ url('restrict/sales') }}">Vendas</a></li>@endcan
                    @can('STOCKS')<li><a href="{{ url('restrict/stocks') }}">Estoques</a></li>@endcan
                </ul>
            </li>
            
            @endif
            
            @if( Gate::check('USERS') 
            || Gate::check('ROLES') 
            || Gate::check('USERS-ROLES') 
            || Gate::check('PERMISSIONS') 
            || Gate::check('PERMISSIONS') 
            ) 
            
            <li class="nav-item ">
                <a class="nav-link"  data-toggle="dropdown" href="#">
                    <i class="material-icons">person</i>
                    <p>Usuários</p>
                </a>
                <ul class="dropdown-menu">
                    @can('USERS')<li><a href="{{ url('restrict/users') }}">Usuários</a></li>@endcan
                    @can('ROLES')<li><a href="{{ url('restrict/roles') }}">Roles</a></li>@endcan
                    @can('USERS-ROLES')<li><a href="{{ url('restrict/roles-users') }}">Users Roles</a></li>@endcan
                    @can('PERMISSIONS')<li><a href="{{ url('restrict/permissions') }}">Permissions</a></li>@endcan
                    @can('PERMISSIONS-ROLES')<li><a href="{{ url('restrict/permission-roles') }}">Roles Permissions</a></li>@endcan
                </ul>
            </li>
            
            @endif
            
            @if( Gate::check('CLIENT') 
            ) 
            
            @can('CLIENT')<li class="nav-item ">
                <a class="nav-link" href="{{ url('restrict/users-clients') }}">
                    <i class="material-icons">people</i>
                    <p>Clientes</p>
                </a>
            </li>@endcan
            
            @endif
            
            @if( Gate::check('EMPLOYEE') 
            ) 
            
            @can('EMPLOYEE')<li class="nav-item ">
                <a class="nav-link" href="{{ url('restrict/users-employees') }}">
                    <i class="material-icons">group_add</i>
                    <p>Funcionario/Farmacêutico</p>
                </a>
            </li>@endcan
            
            @endif
            
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('restrict/contact') }}">
                    <i class="material-icons">message</i>
                    <p>Mensagem</p>
                </a>
            </li>
            
            
        </ul>
    </div>
</div>