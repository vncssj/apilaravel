@extends("Template.default")
@section("content")
<div class="container">
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Nome</th>
                <th>Login</th>
                <th>Email</th>
                <th>Tipo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td><?= $user->nome ?></td>
                <td><?= $user->login ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->role ?></td>
                @if($user->role != "admin")
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