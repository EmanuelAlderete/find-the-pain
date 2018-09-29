@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="partes-tab" data-toggle="tab" href="#partes" role="tab" aria-controls="partes" aria-selected="true">Partes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="sub-tab" data-toggle="tab" href="#sub" role="tab" aria-controls="sub" aria-selected="false">Sub Partes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="problemas-tab" data-toggle="tab" href="#problemas" role="tab" aria-controls="problemas" aria-selected="false">Problemas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="sintomas-tab" data-toggle="tab" href="#sintomas" role="tab" aria-controls="sintomas" aria-selected="false">Sintomas</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade  show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="container">
                            <hr>
                            <h2>Dados Gerais</h2>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 col-md-3">
                                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                                        <div class="card-header">Partes do Corpo</div>
                                        <div class="card-body">
                                            <h5 class="card-title">Total: {{ $partes->count() }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3">
                                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                                        <div class="card-header">Orgãos e Membros</div>
                                        <div class="card-body">
                                            <h5 class="card-title">Total: {{ $subpartes->count() }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3">
                                    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                                        <div class="card-header">Problemas e Doenças</div>
                                        <div class="card-body">
                                            <h5 class="card-title">Total: {{ $problemas->count() }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3">
                                    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                                        <div class="card-header">Sintomas</div>
                                        <div class="card-body">
                                            <h5 class="card-title">Total: {{ $sintomas->count() }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-12 col-md-4">
                                    <table class="table">
                                        <h6>Partes</h6>
                                        <thead>
                                            <td>ID</td>
                                            <td>Nome</td>
                                        </thead>
                                        <tbody>
                                            @forelse($partes as $parte)
                                                <tr>
                                                    <td>{{ $parte->id }}</td>
                                                    <td>{{ $parte->nome }}</td>
                                                </tr>
                                            @empty
                                                Sem dados
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <table class="table">
                                        <h6>Sub Partes</h6>
                                        <thead>
                                        <td>ID</td>
                                        <td>Nome</td>
                                        </thead>
                                        <tbody>
                                        @forelse($subpartes as $subparte)
                                            <tr>
                                                <td>{{ $subparte->id }}</td>
                                                <td>{{ $subparte->nome }}</td>
                                            </tr>
                                        @empty
                                            Sem dados
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <table class="table">
                                        <h6>Sintomas</h6>
                                        <thead>
                                        <td>ID</td>
                                        <td>Nome</td>
                                        </thead>
                                        <tbody>
                                        @forelse($sintomas as $sintoma)
                                            <tr>
                                                <td>{{ $sintoma->id }}</td>
                                                <td>{{ $sintoma->nome }}</td>
                                            </tr>
                                        @empty
                                            Sem dados
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-4">
                                    <table class="table">
                                        <h6>Problemas</h6>
                                        <thead>
                                        <td>ID</td>
                                        <td>Nome</td>
                                        </thead>
                                        <tbody>
                                        @forelse($problemas as $problema)
                                            <tr>
                                                <td>{{ $problema->id }}</td>
                                                <td>{{ $problema->nome }}</td>
                                            </tr>
                                        @empty
                                            Sem dados
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="partes" role="tabpanel" aria-labelledby="partes-tab">
                        <div class="container">
                            <hr>
                            <h3>Cadastro de Partes</h3>
                            <hr>
                            <form action="{{ route('parte-store') }}" method="post" class="form">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label for="">Nome</label>
                                    <input type="text" name="nome" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Descrição</label>
                                    <textarea name="helper" id="" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="sub" role="tabpanel" aria-labelledby="sub-tab">
                        <div class="container">
                            <hr>
                            <h3>Cadastro de Sub Partes</h3>
                            <hr>
                            <form action="{{ route('subparte-store') }}" class="form" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label for="">Nome</label>
                                    <input type="text" name="nome" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Descrição</label>
                                    <textarea name="helper" id="" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Parte</label>
                                    <select name="parte" id="" class="form-control" multiple>
                                        @forelse($partes as $parte)
                                            <option value="{{ $parte->id }}">{{ $parte->nome }}</option>
                                        @empty
                                            <option value="">Não existem</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="problemas" role="tabpanel" aria-labelledby="problemas-tab">
                        <div class="container">
                            <hr>
                            <h3>Cadastro de Problemas</h3>
                            <hr>
                            <form action="{{ route('problema-store') }}" method="post" class="form">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label for="">Nome</label>
                                    <input type="text" name="nome" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Descrição</label>
                                    <textarea name="helper" id="" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">SubParte</label>
                                    <select name="subparte" id="" class="form-control">
                                        @forelse($subpartes as $subparte)
                                            <option value="{{ $subparte->id }}">{{ $subparte->nome }}</option>
                                        @empty
                                            <option value="">Não existem</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Sintomas</label>
                                    <select name="sintomas[]" id="" class="form-control" multiple>
                                        @forelse($sintomas as $sintoma)
                                            <option value="{{ $sintoma->id }}">{{ $sintoma->nome }}</option>
                                        @empty
                                            <option value="">Não existem</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sintomas" role="tabpanel" aria-labelledby="sintomas-tab">
                        <div class="container">
                            <hr>
                            <h3>Cadastro de Sintomas</h3>
                            <hr>
                            <form action="{{ route('sintoma-store') }}" method="post" class="form">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label for="">Nome</label>
                                    <input type="text" name="nome" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Descrição</label>
                                    <textarea name="helper" id="" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
