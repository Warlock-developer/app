
/** 
* Class  
* @author: Dawin Valenzuela 
* @page: http://
* @date: 1 March 2016
* @version: 1.0
*/
var users = {

    config : {
        table : '',
        buttons:{
            'add': '',
            'edit': '',
            'delete':'',
            'reload':''
        }
    },

	init:function(){

	},

	/** 
   * Function to show datatables in current page
   * @param tableID to assign plugin dtatable
   * @param url to send by ajax data
   * @return initialize call our functions
   */
	datatables: function(tableId, url){

		this.config.table = $('#'+tableId).DataTable({
            "dom":
                    "<'row'<'col-md-6'B><'col-md-6'fr>>" +
                    "<'row'<'col-xs-12 col-sm-12 col-md-12 col-lg-12't>>" +
                    "<'row'<'col-md-6'i><'col-md-6'p>>",
            "buttons": [ 
                    {
                        text: '<span class="glyphicon glyphicon-file" aria-hidden="true"></span>',
                        action: function ( e, dt, node, config ) {
                            $('#modal_save').modal('show');
                        }
                    },{
                        text: '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>',
                        action: function ( e, dt, node, config ) {
                            alert( 'Button activated' );
                        }
                    },{
                        text: '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>',
                        action: function ( e, dt, node, config ) {
                            alert( 'Button activated' );
                        }
                    },{
                        text: '<span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>',
                        action: function ( e, dt, node, config ) {
                            alert( 'Button activated' );
                        }
                    },
                    'excel', 
                    'pdf', 
                    'colvis' 
            ],
            "scrollY": "300px",
            "scrollX": "100%",
            "pageLength": 50,
            "destroy": true,
            "colReorder": true,
            "ajax": {
                "url": url,
                "type": "POST",
            },
            "language": {
                "processing": "Procesando, Espere un Momento...",
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "columns": [
                {'data': 'usuario'},
                {'data': 'clave'},
                {'data': 'nombres'},
                {'data': 'apellidos'},
                {'data': 'correo'},
            ]
        });
	},

    saveData: function (formId) {
        $.ajax({
            url: 'users/set_user',
            type: "POST",
            data: $('#'+formId).serializeArray(),
            dataType: "json",
            success: function (data) {
                //console.log(data);
                if (data.success == true) {
                    $('.form-group').removeClass('has-error')
                            .removeClass('has-success');
                    $('.text-danger').remove();

                    //mensaje("alertamensaje", true,'Operación realizada');
                } else {
                    $.each(data.messages, function (key, value) {
                        var element = $('#' + key);
                        element.closest('div.form-group')
                                .removeClass('has-error')
                                .addClass(value.length > 0 ? 'has-error' : 'has-success')
                                .find('.text-danger').remove();
                        element.after(value);
                    });
                    //mensaje("alertamensaje", 'error','Verifique los datos');
                }
            }
        });
    },
	
}

$(function(){
	users.init();
	users.datatables('table-users','users/get_userlist');
});