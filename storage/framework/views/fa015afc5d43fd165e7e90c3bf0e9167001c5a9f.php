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
            <?php if(session()->has('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('message')); ?>

            </div>
            <?php endif; ?>
            <?php $__currentLoopData = $motoristas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $motorista): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($motorista->nome); ?></td>
                <td><?php echo e($motorista->cpf); ?></td>
                <td><?php echo e($motorista->cnh); ?></td>
                <td style="text-align: right;"><a href="<?php echo e(route('editar_motorista', ['id'=>$motorista->id])); ?>" data-toggle="modal" data-target="#ModalEdit" type="button" class="btn btn-success">Editar</a>
                <a href="<?php echo e(route('excluir_motorista', ['id'=>$motorista->id])); ?>" title="Excluir motorista <?php echo e($motorista->nome); ?>" type="button" class="btn btn-danger">Excluir</a></td>
                <?php echo $__env->make('motoristas.modal.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    

</body>

</html>
<?php /**PATH C:\xampp\htdocs\Cadastro_Laravel\cadastro-motorista\resources\views/motoristas/list.blade.php ENDPATH**/ ?>