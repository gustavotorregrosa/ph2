<div class="modal fade" tabindex="-1" role="dialog" id="mdl-cria-produto">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionar produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="criarproduto.php" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="input-nome-produto">Nome do produto</label>
                        <input name="nome" type="text" class="form-control" id="input-nome-produto">
                    </div>

                    <div class="form-group">
                        <label for="input-preco-produto">Preço (R$)</label>
                        <input name="preco" type="text" class="form-control moedareal" id="input-preco-produto">
                    </div>

                    <div class="form-group">
                        <label for="input-descricao-produto">Descrição</label>
                        <textarea name="descricao" class="form-control" id="input-descricao-produto" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>

            </form>

        </div>
    </div>
</div>