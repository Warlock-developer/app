<!-- Modal -->
<div class="modal fade" id="modal_save" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Guardar Informaciòn</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="form_users">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Nombres</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Escriba Nombres">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Apellidos</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Escriba Apellidos">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nombre de Usuario">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Clave</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="clave" name="clave" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Repetir Clave</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="clave2" name="clave2" >
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" onclick="users.saveData('form_users');" id="save">Save</button>
            </div>
        </div>
    </div>
</div>



