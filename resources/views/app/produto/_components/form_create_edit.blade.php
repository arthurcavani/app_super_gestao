@if (isset($produto->id))
    <form method="post" action="{{ route('produto.update', ['produto' => $produto->id]) }}">
        @csrf
        @method('PUT')
    @else
        <form method="post" action="{{ route('produto.store') }}">
            @csrf
@endif

<input name="nome" value="{{ $produto->nome ?? old('nome') }}" type="text" placeholder="Nome" class="borda-preta">
{{ $errors->has('nome') ? $errors->first('nome') : '' }}

<input name="descricao" value="{{ $produto->descricao ?? old('descricao') }}" type="text" placeholder="Descrição"
    class="borda-preta">
{{ $errors->has('descricao') ? $errors->first('descricao') : '' }}

<input name="peso" value="{{ $produto->peso ?? old('peso') }}" type="text" placeholder="Peso" class="borda-preta">
{{ $errors->has('peso') ? $errors->first('peso') : '' }}

<select name="unidade_id">
    <option>-- Selecione a unidade de medida --</option>
    @foreach ($unidades as $unidade)
        <option value="{{ $unidade->id }}" {{ ($unidade->id ?? old('unidade_id')) == $unidade->id ? 'selected' : '' }}>
            {{ $unidade->descricao }}</option>
    @endforeach
</select>
{{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}

<button type="submit" class="borda-preta">Cadastrar</button>
</form>
