<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Cadastro de Motoristas</title>
</head>

<body>
    <table class="table table-hover table-dark">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col" colspan="3">CNH</th>
            </tr>
        </thead>
        <tbody>
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
            @foreach( $motoristas as $motorista )
            <tr>
                <td>{{ $motorista->nome }}</td>
                <td>{{ $motorista->cpf }}</td>
                <td>{{ $motorista->cnh }}</td>
                <td style="text-align: right;"><a href="{{ route('editar_motorista', ['id'=>$motorista->id]) }}" data-toggle="modal" data-target="#ModalEdit" type="button" class="btn btn-success">Editar</a>
                <a href="{{ route('excluir_motorista', ['id'=>$motorista->id]) }}" title="Excluir motorista {{ $motorista->nome }}" type="button" class="btn btn-danger">Excluir</a></td>
                @include('motoristas.modal.edit')
            </tr>
            @endforeach
        </tbody>
    </table>
    

</body>

</html>
