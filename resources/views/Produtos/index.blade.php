@extends("Template.default")
@section("content")
<div class="container">
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Em estoque</th>
                <th>Preço</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
            <tr>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->categoria->nome}}</td>
                <td>{{$produto->quantidade}}</td>
                <td>{{$produto->preco}}</td>
                @if($produto->role != "admin")
                <td>
                    <a href="#">Delete</a>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection