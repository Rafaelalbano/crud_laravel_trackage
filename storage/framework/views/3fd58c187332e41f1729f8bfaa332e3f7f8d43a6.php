<section>
    <div class="position-fixed float-right" style="bottom: 24px; right: 24px;">
        <?php echo csrf_field(); ?>
        <?php echo $__env->make('motoristas.modal.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('data'); ?>
    </div>
</section><?php /**PATH C:\xampp\htdocs\Cadastro_Laravel\cadastro-motorista\resources\views/layouts/create.blade.php ENDPATH**/ ?>