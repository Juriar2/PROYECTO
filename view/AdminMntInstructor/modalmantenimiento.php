<div id="modalmantenimiento" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 id="lbltitulo" class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"></h6>
            </div>
            <!-- Formulario Mantenimiento -->
            <form method="post" id="instructor_form">
                <div class="modal-body">
                    <input type="hidden" name="inst_id" id="inst_id"/>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Nombre: <span class="tx-danger">*</span></label>
                            <input class="form" id="inst_nom" type="text" name="inst_nom" placeholder="Nombre" required/>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Apellido Paterno: <span class="tx-danger">*</span></label>
                            <input class="form" id="inst_apep" type="text" name="inst_apep"  placeholder="Apellido paterno" required/>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Apellido Materno: <span class="tx-danger">*</span></label>
                            <input class="form" id="inst_apem" type="text" name="inst_apem" placeholder="Apellido materno" required/>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Correo: <span class="tx-danger">*</span></label>
                            <input class="form" id="inst_correo" type="email" name="inst_correo" placeholder="Correo electronico " required/>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Sexo: <span class="tx-danger">*</span></label>
                            <select class="form select2" style="width:100%" name="inst_sex" id="inst_sex"  data-placeholder="Seleccione">
                                <option label="Seleccione"></option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Telefono: <span class="tx-danger">*</span></label>
                            <input class="form" id="inst_telf" type="text" name="inst_telf" placeholder="Telefono" required/>
                        </div>
                    </div>

                </div>
                <hr>
                <div class="modal-footer">
                    <button type="submit" name="action" value="add" class="resgistro01"></i> Guardar</button>
                    <button type="reset" class="resgistro02" aria-label="Close" aria-hidden="true" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>