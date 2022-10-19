<!--modal-dialog modal-dialog-vertical-center ,modal-dialog modal-dialog modal-sm -->
<div id="modalmantenimiento" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0">
            <div class="modal-header pd-y-20 pd-x-25">
			<h6 id="lbltitulo" class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"></h6>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> 
            </div>
            <!-- Formulario Mantenimiento -->
            <form method="post" id="cursos_form">
                <div class="modal-body">
                    <input type="hidden" name="cur_id" id="cur_id"/>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Categoria: <span class="tx-danger">*</span></label>
                            <select class="form select" style="width:100%" name="cat_id" id="cat_id" data-placeholder="Seleccione"required>
                                <option label="Seleccione"></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Nombre del taller: <span class="tx-danger">*</span></label>
                            <input class="form " id="cur_nom" type="text" name="cur_nom" placeholder="Nombre" required/><p></p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Descripcion: <span class="tx-danger">*</span></label>
                            <textarea class="formularioxd1 tx-uppercase" id="cur_descrip" type="text" name="cur_descrip" placeholder="Descripcion" required></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Fecha Inicio: <span class="tx-danger">*</span></label>
                            <input class="form tx-uppercase" id="cur_fechini" type="date" name="cur_fechini" required/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Fecha Fin: <span class="tx-danger">*</span></label>
                            <input class="form tx-uppercase" id="cur_fechfin" type="date" name="cur_fechfin" required/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Instructor: <span class="tx-danger">*</span></label>
                            <select class="form select" style="width:100%" name="inst_id" id="inst_id" data-placeholder="Seleccione" required>
                                <option label="Seleccione"></option>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" value="Guardar" name="action" value="add" class="resgistro01">
                    <button type="reset" class="resgistro02" aria-label="Close" aria-hidden="true" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
                    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>
                </div>
            </form>
        </div>
    </div>
</div>

	
	

	