@extends("template.default")
@section("content")
<h3>Novo Usuário</h3>
<form method="post" action="{{url('users/add')}}">
    {!! csrf_field() !!}
    <div class="col-md-12 row">
        <div class="col-md-12">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="col-md-6">
            <label for="login">Login:</label>
            <input type="text" class="form-control" name="login" id="login">
        </div>
        <div class="col-md-6">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="col-md-6">
            <label for="senha">Senha:</label>
            <input type="password" class="form-control" name="senha" id="senha">
        </div>
        <div class="col-md-6">
            <label for="confirmaSenha">Confirmar Senha:</label>
            <input type="password" class="form-control" name="confimaSenha" id="confimaSenha">
        </div>
        <div class="col-md-4 offset-md-4">
            <div class="clearfix">&nbsp</div>
            <input type="submit" value="Salvar" class="btn btn-info col-md-12">
        </div>
    </div>
</form>
@endsection