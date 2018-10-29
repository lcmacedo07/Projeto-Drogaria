@extends('layouts.restrict.app')

@section('title','Dashboard')

@push('css')

@endpush

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-lg-12">
                <div class="card card-chart">
                    <div class="card-header card-header-success">
                        <div class="ct-chart" id="dailySalesChart"></div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Vendas</h4>
                        <p class="card-category">
                            <span class="text-success"></span>
                        </p>
                        <h3 class="card-title">
                            <small>{{ $sales }}</small>
                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> updated 4 minutes ago
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="card card-chart">
                    <div class="card-header card-header-warning">
                        <div class="ct-chart" id="websiteViewsChart"></div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Usuarios</h4>
                        <p class="card-category">

                        </p>
                        <h3 class="card-title">
                            <small>{{ $user }}</small>
                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> campaign sent 2 days ago
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="card card-chart">
                    <div class="card-header card-header-danger">
                        <div class="ct-chart" id="completedTasksChart"></div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Compras</h4>
                        <p class="card-category"></p>
                        <h3 class="card-title">
                            <small>{{ $purchases }}</small>
                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> campaign sent 2 days ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">location_city</i>
                        </div>
                        <p class="card-category">Cidades</p>
                        <h3 class="card-title">
                            <small>{{ $citys }}</small>
                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-warning">warning</i>
                            <a href="#pablo" class="warning-link">Get More Space...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">local_shipping</i>
                        </div>
                        <p class="card-category">Transportadoras</p>
                        <h3 class="card-title">
                            <small>{{ $conveyors }}</small>
                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">date_range</i> Last 24 Hours
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-danger card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">library_books</i>
                        </div>
                        <p class="card-category">Fornecedores</p>
                        <h3 class="card-title">
                            <small>{{ $providers }}</small>
                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">local_offer</i> Tracked from Github
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">message</i>
                        </div>
                        <p class="card-category">Mensagens</p>
                        <h3 class="card-title">
                            <small>{{ $contacts }}</small>
                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">update</i> Just Updated
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title">TODOS OS PRODUTOS</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-success">
                                <tr>
                                    <th>CODIGO DO PRODUTO</th>
                                    <th>CODIGO DA CATEGORIA</th>
                                    <th>CODIGO DO FORNECEDOR</th>
                                    <th>DESCRIÇÃO</th>
                                    <th>PESO (KG)</th>
                                    <th>CONTROLADO</th>
                                    <th>QUANTIDADE DETERMINADA</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $registro)
                                <tr>
                                    <td> {{ $registro->id }} </td>
                                    <td> {{ $registro->category_id }} </td>
                                    <td> {{ $registro->provider_id }} </td>
                                    <td> {{ $registro->description }} </td>
                                    <td> {{ $registro->weight }} </td>
                                    <td> {{ $registro->controlled }} </td>
                                    <td> {{ $registro->determined_amount }} </td>
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

<footer class="footer">
    <div class="container-fluid">
        <nav class="float-left">
            <ul>
                <li>
                    <a href="{{ url('/') }}">
                        HOME
                    </a>
                </li>
                <li>
                    <a href="{{ url('/about') }}">
                        About Us
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright float-right" id="date">
            , made with <i class="material-icons">favorite</i> by
            <a href="#" target="_blank">Drogaria</a> for a better web.
        </div>
    </div>
</footer>

@endsection

@push('js')

@endpush