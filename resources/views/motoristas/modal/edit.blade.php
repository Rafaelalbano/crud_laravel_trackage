<form action="{{ route('atualizar_motorista', ['id' => $motorista->id]) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="modal fade text-left" id="ModalEdit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Cadastrar Motorista</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" value="{{$motorista->nome}}">
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF" value="{{$motorista->cpf}}">
                        </div>
                        <div class="form-group">
                            <label for="cnh">CNH</label>
                            <input type="text" class="form-control" id="cnh" name="cnh" placeholder="Digite a CNH" value="{{$motorista->cnh}}">
                            <br>
                            <hr>
                        </div>
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Atualizar</button>
                    </div>
                </div>
</form>