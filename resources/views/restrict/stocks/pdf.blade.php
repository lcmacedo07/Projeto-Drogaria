@section('content')
<nav aria-label='breadcrumb' class='m-t-20'>
    <ol class='breadcrumb text-uppercase'>
        <li class='breadcrumb-item'><a href='{{url('/restrict')}}'>HOME</a></li>
        <li class='breadcrumb-item active' aria-current='page'>ESTOQUES</li>
    </ol>
</nav>

<h1>Drogaria Palmas</h1>
<h4>8383 565th TO, Palmas</h4>
<h4>PM, Tocantins, 8383</h4>
<h4>Telefone: (63) 3224-4512</h4>
<h4>Email: drogaria@gmail.le.com</h4>
<h4>Cnpj: 01.255.420/5669-81</h4>
<hr>

<h3>Relatorios do estoque</h3>
<hr>

<div class='content-box'>
    <div class='content'>
        <div class='row p-2'>
            <div class='col-md-12'>
                <div class='table-responsive alt-table'>
                    <table class='table table-hover' id='table2'>
                        <thead>
                            <tr>
                                <th>CODIGO DO ESTOQUE</th>
                                <th>NOME DO ESTOQUE</th>
                                <th>INVENTARIO DISPONIVEL</th>
                                <th>VALOR DE CUSTO</th>
                                <th>VALOR DE VENDA</th>
                                <th>VALOR DE LUCRO</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $registro)
                            <tr>
                                <td> {{ $registro->sto_codigo }} </td>
                                <td> {{ $registro->sto_name }} </td>
                                <td> {{ $registro->sto_available_inventory }} </td>
                                <td> {{ $registro->sto_cost_value }} </td>
                                <td> {{ $registro->sto_salue_value }} </td>
                                <td> {{ $registro->sto_profit_value }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>  
            </div>  
        </div>  
    </div>
</div>

