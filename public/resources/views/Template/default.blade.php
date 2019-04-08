<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Padrão</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div id="menu-principal">
        <nav class="offset-md-4 col-md-4">
            <a href="<?= URL::to('/');?>/categorias">
                <div class="link-menu col-md-2 btn">Categorias</div>
            </a>
            <a href="<?= URL::to('/');?>/produtos">
                <div class="link-menu col-md-2 btn">Produtos</div>
            </a>
            <a href="<?= URL::to('/');?>/users">
                <div class="link-menu col-md-2 btn">Usuários</div>
            </a>
        </nav>
    </div>
    <div class="container">
        @yield("content")
    </div>
</body>

</html>