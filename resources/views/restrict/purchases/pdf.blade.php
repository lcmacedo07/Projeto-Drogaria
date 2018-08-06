@section('content')
<nav aria-label='breadcrumb' class='m-t-20'>
    <ol class='breadcrumb text-uppercase'>
        <li class='breadcrumb-item'><a href='{{url('/restrict')}}'>HOME</a></li>
        <li class='breadcrumb-item active' aria-current='page'>COMPRAS</li>
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
                                <th>CODIGO DA COMPRA</th>
                                <th>CODIGO DO FORNECEDOR</th>
                                <th>DATA DA COMPRA</th>
                                <th>REFERENCIA</th>
                                <th>QUANTIDADE</th>
                                <th>VALOR R$</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $registro)
                            <tr>
                                <td> {{ $registro->pur_codigo }} </td>
                                <td> {{ $registro->pro_codigo }} </td>
                                <td> {{ $registro->pur_date }} </td>
                                <td> {{ $registro->pur_reference }} </td>
                                <td> {{ $registro->pur_amount }} </td>
                                <td> {{ $registro->pur_value }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>  
            </div>  
        </div>  
    </div>
</div>

