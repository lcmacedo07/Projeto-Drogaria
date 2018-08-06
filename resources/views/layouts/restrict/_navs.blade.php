<nav class='navbar'>
    <div class='navbar-header container'>
        <a href='#' class='menu-toggle'><i class='zmdi zmdi-menu'></i></a>
        <a href='{{url('/restrict')}}'><h3>Drogaria</h3></a>
    </div>
    <div class='navbar-container clearfix'>
        <div class='pull-left'>
            <a href='#' class='page-title text-uppercase'>{{ config('app.name') }}</a>
        </div>
        <div class='pull-right'>
            <ul class='nav pull-right right-menu'>
                <li class='more-options dropdown'>
                    <a class='dropdown-toggle' data-toggle='dropdown'>
                        <i class='zmdi zmdi-account-circle'></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<aside class='sidebar'>
    <ul class='nav metismenu'>
        @if( Gate::check('STORE') 
        )
        <li>
            <a href="{{route('stores.index')}}"><i class='zmdi zmdi-view-dashboard'></i>Stores<span class='zmdi arrow'></span>
            
            </a>
        </li>
        @endif

        @if( Gate::check('PAYMANTS-TYPES') 
        || Gate::check('PAYMANTS') 
        || Gate::check('CREDITS-TYPES') 
        || Gate::check('RECEIPTS') 
        || Gate::check('SERVICES') 
        || Gate::check('BUDGETS') 
        )
        <li>
            <a href='#'><i class='zmdi zmdi-money-box'></i>Financeiro<span class='zmdi arrow'></span></a>
            <ul class='nav nav-inside collapse'>
                @can('PAYMANTS-TYPES')<li><a href="{{route('paymants_types.index')}}">Pagamentos (Categorias)</a></li>@endcan
                @can('PAYMANTS')<li><a href="{{route('paymants.index')}}">Pagamentos</a></li>@endcan
                @can('CREDITS-TYPES')<li><a href="{{route('credits_types.index')}}">Recebimentos (Categorias)</a></li>@endcan
                @can('CREDITS')<li><a href="{{route('credits.index')}}">Recebimentos</a></li>@endcan
                @can('SERVICES')<li><a href="{{route('services.index')}}">Serviços</a></li>@endcan
                @can('BUDGETS')<li><a href="{{route('budgets.index')}}">Orçamentos</a></li>@endcan
            </ul>
        </li>
        @endif

        @if( Gate::check('PRODUCTS') 
        || Gate::check('CATEGORYS') 
        )
        <li>
            <a href='#'><i class="zmdi zmdi-case"></i>Produtos<span class='zmdi '></span></a>
            <ul class='nav nav-inside collapse'>
                @can('PRODUCTS')<li><a href="{{route('products.index')}}">Produtos</a></li>@endcan
                @can('CATEGORYS') <li><a href="{{route('categorys.index')}}">Categorias</a></li>@endcan
                @can('CATEGORYS') <li><a href="{{route('item_inputs.index')}}">Item das entradas</a></li>@endcan
                @can('CATEGORYS')<li><a href="{{route('item_exits.index')}}">Item das saidas</a></li>@endcan
            </ul>
        </li>
        @endif

        @if( Gate::check('STOCKS') 
        || Gate::check('SALES')
        || Gate::check('PURCHASES')
        )
        <li>
            <a href='#'><i class='zmdi zmdi-calendar'></i>Relatorio<span class='zmdi arrow'></span></a>
            <ul class='nav nav-inside collapse'>
                @can('STOCKS') <li> <a href="{{route('stocks.index')}}">Estoque</a></li>@endcan
                @can('SALES') <li> <a href="{{route('sales.index')}}">Vendas</a></li>@endcan
                @can('PURCHASES') <li> <a href="{{route('purchases.index')}}">Compras</a></li>@endcan
            </ul>
        </li>
        @endif
        
        @if( Gate::check('CONVEYORS') 
        )
        <li>
            <a href='#'><i class="zmdi zmdi-truck"></i>Transportadora<span class='zmdi arrow'></span></a>
            <ul class='nav nav-inside collapse'>
                @can('CONVEYORS') <li> <a href="{{route('conveyors.index')}}">Transporadora</a></li>@endcan
                @can('CONVEYORS') <li> <a href="{{route('inputs.index')}}">Entrada</a></li>@endcan
                @can('CONVEYORS') <li> <a href="{{route('exits.index')}}">Saida</a></li>@endcan
            </ul>
        </li>
        @endif
        
        @if( Gate::check('CITYS') 
        )
        <li>
            <a href="{{route('citys.index')}}"><i class="zmdi zmdi-city-alt"></i>Cidades<span class='zmdi arrow'></span>
            
            </a>
        </li>
        @endif
        
         @if( Gate::check('PROVIDERS') 
         || Gate::check('PURCHASES')
         || Gate::check('PURCHASES')
        )
        <li>
            <a href='#'><i class="zmdi zmdi-boat"></i>Fornecedores<span class='zmdi arrow'></span></a>
            <ul class='nav nav-inside collapse'>
                @can('PROVIDERS') <li> <a href="{{route('providers.index')}}">Fornecedores</a></li>@endcan
                @can('PURCHASES') <li> <a href="{{route('purchases.index')}}">Compras</a></li>@endcan
                @can('PURCHASES') <li> <a href="{{route('purchases.index')}}">Compras</a></li>@endcan
            </ul>
        </li>
        @endif

        @if( Gate::check('USERS') 
        || Gate::check('USERS-ROLES') 
        || Gate::check('PERMISSIONS') 
        || Gate::check('PERMISSIONS-ROLES') 
        )    
        <li>
            <a href='#'><i class='zmdi zmdi-accounts-alt'></i>Usuários<span class='zmdi arrow'></span></a>
            <ul class='nav nav-inside collapse'>
                @can('USERS')<li><a href="{{route('users.index')}}">Usuarios</a> </li>@endcan
                @can('USERS-ROLES')<li><a href="{{route('roles-users.index')}}">Perfis de Usuários</a></li>@endcan
                @can('ROLES')<li><a href="{{route('roles.index')}}">Roles</a> </li>@endcan
                @can('PERMISSIONS')<li><a href="{{route('permissions.index')}}">Permissions</a> </li>@endcan
                @can('PERMISSIONS-ROLES')<li><a href="{{route('permission-roles.index')}}">Roles Permissions</a> </li>@endcan
            </ul>
        </li>
        @endif

        
        @can('CLIENT')
        <li>
            <a href="{{route('users-clients.index')}}"><i class="zmdi zmdi-account"></i>Clientes</a>
        </li>
        @endcan
        
        @can('EMPLOYEE')
        <li>
            <a href="{{route('users-employees.index')}}"><i class="zmdi zmdi-account"></i>Funcionarios</a>
        </li>
        @endcan

        @if (Auth::guest())
        @else
        <li>
            <a href='{{url('/logout')}}' onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class='zmdi zmdi-run'></i>Sair
            </a>
        </li>
        @endif

    </ul>
</aside>