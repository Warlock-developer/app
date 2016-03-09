<script type="text/javascript" src="<?php echo base_url() ?>assets/users.js"></script>
<div class="row">
    <div class="col-lg-12">
        <table id="table-users" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Clave</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Usuario</th>
                    <th>Clave</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                </tr>
            </tfoot>
        </table>        
    </div>
</div>

<?php $this->load->view('users/modals/add_modal'); ?>