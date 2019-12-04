$(function(){

    $('#tableUsers').DataTable({
        destroy: true,
        "bLengthChange": true,
        "sAjaxSource": "app/get.data.php", // <-- Información de base de datos
        "bPaginate":true,
        "sPaginationType":"full_numbers",
        "iDisplayLength": 5, // <--- Número de registros a mostrar por página
        "lengthMenu": [ 10, 25, 50, "Todos"], // <-- Mostrar registros por página dinámicamente
        "columns": [     // <-- Columnas como se encuentran la base de datos
          { aaData: 'id'  },
          { aaData: 'cedula' },
          { aaData: 'nombre'   }
        ],

        "fnRowCallback": function( nRow, aData, iDisplayIndex )  {  // <-- Acción después de cargar los datos
            //$('td:eq(0)', nRow).html('');
            
         },

        "language": {
           "url": "js/Spanish.json" // <-- Control de botones del dataTable en español
         }
    }); 







});