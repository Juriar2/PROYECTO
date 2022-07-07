<div id="modalmantenimiento" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 id="lbltitulo" class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"></h6>
            </div>
            <!-- Formulario Mantenimiento -->
            <form method="post" id="usuario_form">
                <div class="modal-body">
                    <input type="hidden" name="usu_id" id="usu_id"/>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Nombre: <span class="tx-danger">*</span></label>
                            <input class="form" id="usu_nom" type="text" name="usu_nom"  placeholder="Ingrese el nombre ejemplo maria" required/>
                            <span>(required, at least 3 characters)</span>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Apellido Paterno: <span class="tx-danger">*</span></label>
                            <input class="form" id="usu_apep" type="text" name="usu_apep" placeholder="Ingrese el apellido ejemplo hernandez"required/>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Apellido Materno: <span class="tx-danger">*</span></label>
                            <input class="form" id="usu_apem" type="text" name="usu_apem"placeholder="Ingrese el appelido materno ejemplo guzaman"required />
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Correo: <span class="tx-danger">*</span></label>
                            <input class="form" id="usu_correo" type="email" name="usu_correo" placeholder="Ingrese el correo electronico ejemplo maria@homail.com" required/>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Password: <span class="tx-danger">*</span></label>
                            <input class="form" id="usu_pass" type="password" name="usu_pass"placeholder="Ingrese el password" required/>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Sexo: <span class="tx-danger">*</span></label>
                            <select class="form select2" style="width:100%" name="usu_sex" id="usu_sex" data-placeholder="Seleccione" required>
                                <option label="Seleccione"></option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Telefono: <span class="tx-danger">*</span></label>
                            <input class="form " id="usu_telf" type="text" name="usu_telf" placeholder="Ingrese el telefono ejemplo 932115475"required />
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Rol: <span class="tx-danger">*</span></label>
                            <select class="form select2" style="width:100%" name="rol_id" id="rol_id" data-placeholder="Seleccione" required>
                                <option label="Seleccione"></option>
                                <option value="1">Usuario</option>
                                <option value="2">Admin</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Matricula: <span class="tx-danger">*</span></label>
                            <input class="form" id="usu_matri" type="text" name="usu_matri"placeholder="Ingrese la matricula 19E478" required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" name="action" value="add" class="resgistro01"></i> Guardar</button>
                    <button type="reset" class="resgistro02" aria-label="Close" aria-hidden="true" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>

