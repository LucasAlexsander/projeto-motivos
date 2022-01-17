$(document).ready( function () {
    $('#listar_dados').DataTable({  //Para iniciar a DataTable de uma maneira mais simples
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "Nenhum resultado encontrado",
            "info": "Mostrando registros de _START_ até _END_ de um total de _TOTAL_ registro",
            "infoEmpty": "Mostrando registros de 0 a 0 de um total de 0 registros",
            "infoFiltered": "(Filtrando um total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primeiro",
                "sLast": "Último",
                "sNext": "Seguinte",
                "sPrevious": "Anterior"
            },
            "sProcessing": "Processando...",
        },
        
    });
});

$(document).ready( function () {
    $('#listar_dados1').DataTable({  //Para iniciar a DataTable de uma maneira mais simples
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "Nenhum resultado encontrado",
            "info": "Mostrando registros de _START_ até _END_ de um total de _TOTAL_ registro",
            "infoEmpty": "Mostrando registros de 0 a 0 de um total de 0 registros",
            "infoFiltered": "(Filtrando um total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primeiro",
                "sLast": "Último",
                "sNext": "Seguinte",
                "sPrevious": "Anterior"
            },
            "sProcessing": "Processando...",
        },
        
    });
});

$(document).ready( function () {
    $('#listar_dados2').DataTable({  //Para iniciar a DataTable de uma maneira mais simples
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "Nenhum resultado encontrado",
            "info": "Mostrando registros de _START_ até _END_ de um total de _TOTAL_ registro",
            "infoEmpty": "Mostrando registros de 0 a 0 de um total de 0 registros",
            "infoFiltered": "(Filtrando um total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primeiro",
                "sLast": "Último",
                "sNext": "Seguinte",
                "sPrevious": "Anterior"
            },
            "sProcessing": "Processando...",
        },
        
    });
});

(function ($) {
    "use strict";


    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    

})(jQuery);
