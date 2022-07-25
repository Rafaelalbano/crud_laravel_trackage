<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Cadastrar Motorista</title>
</head>

<body>
    <div>
        <form action="<?php echo e(route('salvar_motorista')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF">
            </div>
            <div class="form-group">
                <label for="cnh">CNH</label>
                <input type="text" class="form-control" id="cnh" name="cnh" placeholder="Digite a CNH">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Cadastrar</button>
        </form>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\Cadastro_Laravel\cadastro-motorista\resources\views/motoristas/create.blade.php ENDPATH**/ ?>