@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="page-header">Produtos</h1>
            <div class="card">
                <div class="card-header">Listagem de produtos</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Preço</th>
                                <th width="300">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Produto 1</td>
                                <td>R$ 2323,00</td>
                                <td>
                                    <a href="#" class="btn btn-primary">Visualizar</a>
                                    <a href="#" class="btn btn-primary">Editar</a>
                                    <a href="#" class="btn btn-danger">Excluir</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Produto 1</td>
                                <td>R$ 2323,00</td>
                                <td>
                                    <a href="#" class="btn btn-primary">Visualizar</a>
                                    <a href="#" class="btn btn-primary">Editar</a>
                                    <a href="#" class="btn btn-danger">Excluir</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
