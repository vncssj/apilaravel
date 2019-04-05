@extends("Template.default")
@section("content")
<div class="container">
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Nome</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr>
                <td><?= $categoria->nome ?></td>
                <td>
                    @foreach($categoria->produtos as $produto)
                    <?= $produto->nome ?></br>
                    @endforeach
                </td>
                @if($categoria->role != "admin")
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