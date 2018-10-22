
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
    <div class="card card-plain">
        <div class="box-body">
            <a href='{{url("/restrict/$page/create")}}' class='btn btn-primary white m-b-15'> Novo Registro</a>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="">
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
                                <th width='110px'>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $registro)

                            <tr>
                                <td>{{$registro->id}}</td>
                                <td>{{$registro->name}}</td>
                                <td>{{$registro->genre}}</td>
                                <td>{{$registro->date_of_birth}}</td>
                                <td>{{$registro->cpf}}</td>
                                <td>{{$registro->rg}}</td>
                                <td>{{$registro->telephone}}</td>
                                <td>{{$registro->cellphone}}</td>
                                <td>{{$registro->cellphone2}}</td>
                                <td>{{$registro->email}}</td>
                                <td>{{$registro->password}}</td>
                                <td>
                                    <div class='btn-group'>
                                        <a href='{{url("/restrict/$page/$registro->id/deletar")}}' 
                                           onClick="return confirm('Você quer mesmo deletar?')" 
                                           class='btn blue-black-bg white' data-toggle='tooltip' data-placement='top' title='Delete'>
                                            <i class="material-icons">delete</i>
                                        </a>
                                        <a href='{{url("/restrict/$page/$registro->id/edit")}}' 
                                           data-toggle='tooltip' data-placement='top' title='Editar' class='btn blue-black-bg white'>
                                            <i class="material-icons">build</i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('css')

    <link rel='stylesheet' href='{{asset('css/sweetalert.css')}}'/>

    @endpush

    @push('js')

    @include('sweet::alert')
    <script src='{{asset('js/sweetalert.min.js')}}'></script>

    @endpush

    @endsection