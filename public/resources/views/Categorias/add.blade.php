@extends('template.default')
@section('content')
<div class="row">
    <div class="col-md-4 offset-md-4">
        <form method="POST" action="{{url('categorias/add')}}">
            {!! csrf_field() !!}
            <label for="">Nome</label>
            <input type="text" class="form-control" name="nome">
            <div class="clearfix">&nbsp</div>
            <input type="submit" value="Salvar" class="btn btn-info">
        </form>
    </div>
</div>
@endsection