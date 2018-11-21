@extends('layouts.restrict.app')
@section('title'){{$titulo}} - {{config('app.name')}}@endsection
@section('content')

<nav aria-label='breadcrumb' class='m-t-20'>
    <ol class='breadcrumb text-uppercase'>
        <li class='breadcrumb-item'><a href='{{url('/restrict')}}'>HOME</a></li>
        <li class='breadcrumb-item active' aria-current='page'>MENSAGEM</li>
    </ol>
</nav>


<div class="col-md-12">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>CODIGO</th>
                                <th>NOME</th>
                                <th>ASSUNTO</th>
                                <th>ENVIADO EM</th>
                                <th width='115px'>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $registro)
                            <tr>
                                <td width='115px'>{{ $registro->id }}</td>
                                <td width='115px'>{{ $registro->name }}</td>
                                <td width='115px'>{{ $registro->subject }}</td>
                                <td width='115px'>{{ $registro->created_at }}</td>
                                <td>
                                    <a href='{{ url("/restrict/$page/$registro->id") }}' class="btn btn-info btn-sm"><i class="material-icons">details</i></a>
                                    
                                    <a href='{{url("/restrict/$page/$registro->id/deletar")}}' 
                                           onClick="return confirm('Você quer mesmo deletar?')" 
                                            data-toggle='tooltip' data-placement='top' title='Deletar'>
                                            <button class="btn btn-danger btn-sm" type="button">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>CODIGO</th>
                                <th>NOME</th>
                                <th>ASSUNTO</th>
                                <th>ENVIADO EM</th>
                                <th width='115px'>#</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
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