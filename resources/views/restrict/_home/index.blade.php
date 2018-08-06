@extends('adminlte::page')
@section('content')

<div class="row">
    <div class="input-field col-md-3">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <p>Total de Produtos</p>

                <h3>{{$products}}</h3>
            </div>
            <div class="icon">
                <i class="fa fa-medkit"></i>
            </div>
            <a href="restrict/products" class="small-box-footer">
                Ir a Produtos<i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="input-field col-md-3">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <p>Total de Cidades</p>

                <h3>{{$citys}}</h3>
            </div>
            <div class="icon">
                <i class="fa fa-building"></i>
            </div>
            <a href="restrict/citys" class="small-box-footer">
                Ir a Cidades<i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="input-field col-md-3">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <p>Total de Transportadora</p>

                <h3>{{$conveyors}}</h3>
            </div>
            <div class="icon">
                <i class="fa fa-truck"></i>
            </div>
            <a href="restrict/conveyors" class="small-box-footer">
                Ir a Transportadora<i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="input-field col-md-3">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <p>Total de Fornecedores</p>

                <h3>{{$providers}}</h3>
            </div>
            <div class="icon">
                <i class="fa fa-ship"></i>
            </div>
            <a href="restrict/providers" class="small-box-footer">
                Ir a Fornecedores<i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

</div>

<div class="row m-t-20">
    <div class="input-field col-md-3">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <p>Total de Categorias</p>

                <h3>{{$categorys}}</h3>
            </div>
            <div class="icon">
                <i class="fa fa-bars"></i>
            </div>
            <a href="restrict/categorys" class="small-box-footer">
                Ir a Categorias<i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="input-field col-md-3">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <p>Total de Usuários</p>

                <h3>{{$user}}</h3>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
            <a href="restrict/users" class="small-box-footer">Ir a Usuários <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="input-field col-md-3">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <p>Total de Compras</p>

                <h3>{{$purchases}}</h3>
            </div>
            <div class="icon">
                <i class="fa fa-shopping-basket"></i>
            </div>
            <a href="restrict/purchases" class="small-box-footer">Ir a Compras <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="input-field col-md-3">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <p>Total de Vendas</p>

                <h3>{{$sales}}</h3>
            </div>
            <div class="icon">
                <i class="fa fa-cart-arrow-down"></i>
            </div>
            <a href="restrict/sales" class="small-box-footer">Ir a Vendas <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>

@endsection