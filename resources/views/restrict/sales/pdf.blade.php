@section('content')
<nav aria-label='breadcrumb' class='m-t-20'>
    <ol class='breadcrumb text-uppercase'>
        <li class='breadcrumb-item'><a href='{{url('/restrict')}}'>HOME</a></li>
        <li class='breadcrumb-item active' aria-current='page'>VENDAS</li>
    </ol>
</nav>

<h1>Drogaria Palmas</h1>
<h4>8383 565th TO, Palmas</h4>
<h4>PM, Tocantins, 8383</h4>
<h4>Telefone: (63) 3224-4512</h4>
<h4>Email: drogaria@gmail.le.com</h4>
<h4>Cnpj: 01.255.420/5669-81</h4>
<hr>

<h3>Relatorios de Vendas</h3>
<hr>

<div class='content-box'>
    <div class='content'>
        <div class='row p-2'>
            <table class='table table-hover' id='table2'>
                <div class='table-responsive alt-table'>
                    <table class="table table-condensed table-bordered table-striped">
                        <thead>
                            <tr>
                                <!--<th style="text-align: center;">#</th>-->
                                <th width="20px" align="center">CODIGO DA VENDA</th>
                                <th width="40px" align="center">DATA</th>
                                <th width="40px" align="center">QUANTIDADE</th>
                                <th width="40px" align="center">PREÇO DA VENDA</th>
                                <th width="40px" align="center">CUSTO DA VENDA</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $registro)
                            <tr>
                                <td> {{ $registro->sal_codigo }} </td>
                                <td> {{ $registro->sal_date }} </td>
                                <td> {{ $registro->sal_amount }} </td>
                                <td> {{ $registro->sal_exit_price }} </td>
                                <td> {{ $registro->sal_cost_price }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>  
        </div>  
    </div>  
</div>
</div>



