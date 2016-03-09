
/** 
* Class  
* @author: Dawin Valenzuela 
* @page: http://
* @date: 1 March 2016
* @version: 1.0
*/
var users = {

	init:function(){
		this.menu();
	},

	/** 
   * Function to show datatables in current page
   * @param tableID to assign plugin dtatable
   * @param url to send by ajax data
   * @return initialize call our functions
   */
	datatables: function(tableId, url){
		$('#'+tableId).DataTable({
            "dom":
                    "<'row'<'col-md-6 toolbar'><'col-md-6'fr>>" +
                    "<'row'<'col-xs-12 col-sm-12 col-md-12 col-lg-12't>>" +
                    "<'row'<'col-md-6'i><'col-md-6'p>>",
//            "buttons": ['pdfHtml5', 'excelHtml5'],
            "scrollY": "300px",
            "scrollX": "100%",
            "pageLength": 50,
            "destroy": true,
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

	menu: function(){
		
	}
}

$(function(){
	users.init();
	users.datatables('table-users','users/get_userlist');
});