@extends('layouts.restrict.app')
@section('title'){{$titulo}} - {{config('app.name')}}@endsection
@section('content')
<nav aria-label='breadcrumb' class='m-t-20'>
    <ol class='breadcrumb text-uppercase'>
        <li class='breadcrumb-item'><a href='{{url('/restrict')}}'>HOME</a></li>
        <li class='breadcrumb-item active' aria-current='page'>{{$titulo}}</li>
    </ol>
</nav>

<div class="col-md-12">
        <div class="box-body">
            <a href='{{url("/restrict/$page/create")}}' class='btn btn-success white m-b-15'> Novo Registro</a>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID DO USÚARIO</th>
                                <th>NOME</th>
                                <th>SEXO</th>
                                <th>DATA DE NASCIMENTO</th>
                                <th>CPF</th>
                                <th>RG</th>
                                <th>TELEFONE</th>
                                <th>CELULAR</th>
                                <th>CELULAR 2</th>
                                <th>EMAIL</th>
                                <th>SENHA</th>
                                <th>TIPO</th>
                                <th width='110px'>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $registro)

                            <tr>
                                <td width='110px'>{{$registro->id}}</td>
                                <td width='110px'>{{$registro->name}}</td>
                                <td width='110px'>{{$registro->genre}}</td>
                                <td width='110px'>{{$registro->date_of_birth}}</td>
                                <td width='110px'>{{$registro->cpf}}</td>
                                <td width='110px'>{{$registro->rg}}</td>
                                <td width='110px'>{{$registro->telephone}}</td>
                                <td width='110px'>{{$registro->cellphone}}</td>
                                <td width='110px'>{{$registro->cellphone2}}</td>
                                <td width='110px'>{{$registro->email}}</td>
                                <td width='110px'>{{$registro->password}}</td>
                                <td width='110px'>{{$registro->type}}</td>
                                <td>
                                <a href='{{url("/restrict/$page/$registro->id/deletar")}}' 
                                           onClick="return confirm('Você quer mesmo deletar?')" 
                                            data-toggle='tooltip' data-placement='top' title='Deletar'>
                                            <button class="btn btn-danger btn-sm" type="button">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </a>
                                        <a href='{{url("/restrict/$page/$registro->id/edit")}}' 
                                           data-toggle='tooltip' data-placement='top' title='Editar' >
                                           <button class="btn btn-success btn-sm" type="button">
                                            <i class="material-icons">build</i>
                                           </button>
                                        </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID DO USÚARIO</th>
                                <th>NOME</th>
                                <th>SEXO</th>
                                <th>DATA DE NASCIMENTO</th>
                                <th>CPF</th>
                                <th>RG</th>
                                <th>TELEFONE</th>
                                <th>CELULAR</th>
                                <th>CELULAR 2</th>
                                <th>EMAIL</th>
                                <th>SENHA</th>
                                <th>TIPO</th>
                                <th width='110px'>#</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@push('css')

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

@endpush

@push('js')

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>   

@endpush

@endsection
