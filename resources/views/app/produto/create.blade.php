@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Produto - Adicionar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form method="post" action="{{ route('produto.store') }}">
                    @csrf
                    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="borda-preta" >
                    {{ $errors->has('nome') ? $errors->first('nome') : '' }}

                    <input name="descricao" value="{{ old('descricao') }}" type="text" placeholder="Descrição" class="borda-preta" >
                    {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}

                    <input name="peso" value="{{ old('peso') }}" type="text" placeholder="Peso" class="borda-preta" >
                    {{ $errors->has('peso') ? $errors->first('peso') : '' }}

                    <select name="unidade_id">
                        <option>-- Selecione a unidade de medida --</option>
                        @foreach ($unidades as $unidade)
                            <option value="{{ $unidade->id }}" {{ old('unidade_id') == $unidade->id ? 'selected' : '' }}>{{ $unidade->descricao }}</option>
                        @endforeach
                    </select>
                    {{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}

                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>

    </div>
@endsection
