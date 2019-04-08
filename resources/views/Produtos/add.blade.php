@extends('Template.default')
@section('content')
<h3>Adicionar Produto</h3>
<form method="POST" action="{{url('produtos/add')}}">
    {!! csrf_field() !!}
    <div class="col-md-12 row">
        <div class="col-md-4">
            <label for="categoria">Categoria:</label>
            <select name="categoria_id" id="categoria" class="custom-select">
                <option value="">Selecione a Categoria</option>
                @foreach($categorias as $categoria)
                <option value="<?= $categoria->id ?>"><?= $categoria->nome ?></option>
                @endforeach
            </select>
        </div>
        <div class="col-md-8">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="col-md-6">
            <label for="quantidade">Quantidade:</label>
            <input type="number" class="form-control" name="quantidade" id="quantidade">
        </div>
        <div class="col-md-6">
            <label for="preco">Valor:</label>
            <input type="number" class="form-control" name="preco" id="preco" step="0.01">
        </div>
        <div class="col-md-12">
            <label for="caracteristicas">Caracteristicas</label>
            <textarea class="form-control" name="caracteristicas" id="caracteristicas"></textarea>
        </div>
        <div class="col-md-4 offset-md-4">
            <div class="clearfix">&nbsp</div>
            <input type="submit" value="Salvar" class="btn btn-info col-md-12">
        </div>
    </div>
</form>
@endsection