<div class="modal fade" tabindex="-1" role="dialog" id="mdl-deleta-produto">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deleta produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="deletaproduto.php" method="post">
                <input type="hidden" name="id" id="input-id-produto-del">
                <input type="hidden" name="nome" id="input-nome-produto-del">
                <div class="modal-body">
                    <p>Deseja realmente deletar o produto <span id="nome-prd-del"></span>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </div>
            </form>

        </div>
    </div>
</div>