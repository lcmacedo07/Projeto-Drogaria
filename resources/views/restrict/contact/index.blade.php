@extends('layouts.restrict.app')
@section('title'){{$titulo}} - {{config('app.name')}}@endsection
@section('content')

<nav aria-label='breadcrumb' class='m-t-20'>
    <ol class='breadcrumb text-uppercase'>
        <li class='breadcrumb-item'><a href='{{url('/restrict')}}'>HOME</a></li>
        <li class='breadcrumb-item active' aria-current='page'>MENSAGEM</li>
    </ol>
</nav>

<nav>
    {{ $data->links() }}
</nav>

<div class="col-md-12">
    <div class="card card-plain">
        <div class="box-body">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="text-primary">
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
                                <td>{{ $registro->id }}</td>
                                <td>{{ $registro->name }}</td>
                                <td>{{ $registro->subject }}</td>
                                <td>{{ $registro->created_at }}</td>
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
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script>
                                            $(document).ready(function() {
                                            $('#table').DataTable();
                                            });
</script>
@endpush