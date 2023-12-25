@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Fornecedor - Adicionar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            {{ $msg ?? '' }}
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form method="post" action="{{ route('app.fornecedor.adicionar') }}">
                    <input type="hidden" name="id" value="{{ $fornecedor->id ?? '' }}">
                    @csrf
                    <input name="nome" value="{{ $fornecedor->nome ?? old('nome') }}" type="text" placeholder="Nome" class="borda-preta" >
                    {{ $errors->has('nome') ? $errors->first('nome') : '' }}

                    <input name="site" value="{{ $fornecedor->site ?? old('site') }}" type="text" placeholder="Site" class="borda-preta" >
                    {{ $errors->has('site') ? $errors->first('site') : '' }}

                    <input name="uf" value="{{ $fornecedor->uf ?? old('uf') }}" type="text" placeholder="UF" class="borda-preta" >
                    {{ $errors->has('uf') ? $errors->first('uf') : '' }}

                    <input name="email" value="{{ $fornecedor->email ?? old('email') }}" type="text" placeholder="E-Mail" class="borda-preta" >
                    {{ $errors->has('email') ? $errors->first('email') : '' }}

                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>

    </div>
@endsection
