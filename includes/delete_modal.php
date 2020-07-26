<!-- Modal -->
<div class="modal fade" id="exampleModa2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Borrador de cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p>¿Estas seguro que quiere borrar el cliente?</p>
                <form id="id_client" action="<?php echo $_SERVER["PHP_SELF"]  ?>" method="POST">
                    <input type="hidden" name="id" id="delete_id">
                    <input type="hidden" name="action" value="delete">
                    <button type="submit" class="btn btn-primary delete_client" name="delete">Si</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </form>
            </div>
        </div>
    </div>
</div>