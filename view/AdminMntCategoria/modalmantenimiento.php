<div id="modalmantenimiento" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 id="lbltitulo" class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"></h6>
            </div>
            <!-- Formulario Mantenimiento -->
            <form method="post" id="categoria_form">
                <div class="modal-body">
                    <input type="hidden" name="cat_id" id="cat_id"/>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Nombre: <span class="tx-danger">*</span></label>
                            <input class="form tx-uppercase" id="cat_nom" type="text" name="cat_nom" placeholder="Nombre del instructor" required/>
                        </div>
                    </div>

                </div>
                <hr>
                <div class="modal-footer">
                    <button type="submit" name="action" value="add" class="resgistro01"><i class="fa fa-check"></i> Guardar</button>
                    <button type="reset" class="resgistro02" aria-label="Close" aria-hidden="true" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>