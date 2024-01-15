@extends('app.layouts.basico')

@section('titulo', 'Produtos')

@section('conteudo')
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Listagem de Produtos</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.create') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto;">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Peso</th>
                            <th>Unidade id</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->descricao }}</td>
                                <td>{{ $produto->peso }}</td>
                                <td>{{ $produto->unidade_id }}</td>
                                <td><a href="{{ route('app.fornecedor.excluir', $produto->id) }}">Excluir</a></td>
                                <td><a href="{{ route('app.fornecedor.editar', $produto->id) }}">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $produtos->appends($request)->links() }}
                {{-- <br>
                {{ $fornecedores->count() }} - Registros na página
                <br>
                {{ $fornecedores->total() }} - Total de Registros
                <br>
                {{ $fornecedores->firstItem() }} - Primeiro item da Página
                <br>
                {{ $fornecedores->lastItem() }} - Último item da Página --}}
                <br>
                Exibindo registros {{ $produtos->firstItem() }} a  {{ $produtos->lastItem() }} de um total de {{ $produtos->total() }} registros
            </div>
        </div>

    </div>
@endsection