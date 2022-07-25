<form action="<?php echo e(route('excluir_motorista', $motorista->id)); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <div class="modal fade text-left" id="ModalDelete" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Excluir Motorista</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div>
                            <div class="form-group">
                                <p>Você realmente deseja excluir o motorista?</p>
                                <br>
                                <hr>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn  btn-danger">Excluir</button>
                            </div>
                        </div>
                    </div>
                </div>
</form><?php /**PATH C:\xampp\htdocs\Cadastro_Laravel\cadastro-motorista\resources\views/motoristas/modal/delete.blade.php ENDPATH**/ ?>