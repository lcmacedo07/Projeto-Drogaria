@section('content')
<nav aria-label='breadcrumb' class='m-t-20'>
    <ol class='breadcrumb text-uppercase'>
        <li class='breadcrumb-item'><a href='{{url('/restrict')}}'>HOME</a></li>
        <li class='breadcrumb-item active' aria-current='page'>ORCAMENTOS</li>
    </ol>
</nav>

<h1>Drogaria Palmas</h1>
<h4>8383 565th TO, Palmas</h4>
<h4>PM, Tocantins, 8383</h4>
<h4>Telefone: (63) 3224-4512</h4>
<h4>Email: drogaria@gmail.le.com</h4>
<h4>Cnpj: 01.255.420/5669-81</h4>
<hr>

<h3>Relatorios do Pagamentos</h3>
<hr>

<div class='content-box'>
    <div class='content'>
        <div class='row p-2'>
            <div class='col-md-12'>
                <div class='table-responsive alt-table'>
                    <table class='table table-hover' id='table2'>
                        <thead>
                            <tr>
                                <th>CODIGO DO PAGAMENTO</th>
                                <th>CODIGO DO TIPO DE PAGAMENTOS</th>
                                <th>DATA DE LANCAMENTO</th>
                                <th>DATA DE VENCIMENTO</th>
                                <th>DATA DE PAGAMENTO</th>
                                <th>VALOR</th>
                                <th>COMPLEMENTOS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $registro)
                            <tr>
                                <td> {{ $registro->pay_codigo }} </td>
                                <td> {{ $registro->pt_description }} </td>
                                <td> {{ $registro->pay_datelaunch }} </td>
                                <td> {{ $registro->pay_datematurity }} </td>
                                <td> {{ $registro->pay_datepayment }} </td>
                                <td> {{ $registro->pay_value }} </td>
                                <td> {{ $registro->pay_complements }} </td>
                                <td>
                                    R$
                                </td>
                                <td> {{ $registro->bud_discount }}% </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>  
            </div>  
        </div>  
    </div>
</div>

