

<?php $__env->startSection('header'); ?>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="https://www.trackage.com.br"><img style="width:100px; margin-left:20px;" src="https://blog.trackage.com.br/wp-content/uploads/2020/08/cropped-logo_tkg.png" alt="Logo Trackage"></a>
</nav>
<div class="container">
  <div class="jumbotron bg-dark" style="padding: 20px;">
    <h1 class="display-4 text-light">Cadastro de motoristas Trackage</h1>
    <p class="lead text-light">Crud simples de cadastro de motoristas em Laravel.</p>
  </div>
  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('content'); ?>
  <div class="container">
  <h3 style="text-align: center; margin-bottom: 10px;">Motoristas Cadastrados</h3>
  <hr>

  <?php echo csrf_field(); ?>
  <?php echo $__env->make('motoristas.list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
  <?php $__env->stopSection(); ?>


  <?php $__env->startSection('data'); ?>
  <div class="position-fixed float-right" style="bottom: 24px; right: 24px;">
    <a href="#" data-toggle="modal" data-target="#ModalCreate" class="btn btn-success" style="border-radius: 100%;">
      +
    </a>
  </div>
  <?php echo csrf_field(); ?>
  <?php echo $__env->make('motoristas.modal.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cadastro_Laravel\cadastro-motorista\resources\views/index.blade.php ENDPATH**/ ?>