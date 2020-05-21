$(document).ready(function () {
    $("#form_usuarios").bind("submit",function(){

       

        var btnEnviar = $("#btnEnviar");
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data:$(this).serialize(),
            beforeSend: function(){
            
                btnEnviar.val("Enviando"); 
                btnEnviar.attr("disabled","disabled");
            },
            complete:function(data){
     
                btnEnviar.val("ENVIAR INFOMRACION");
                btnEnviar.removeAttr("disabled");
                
            },
            success: function(data){
                alert("Su información se ha enviado con exito");
                $(".respuesta").html(data);
                $('.form-control').val('');
            },
            error: function(data){
       
                alert("Problemas al tratar de enviar el formulario");
            }
        });

        return false;
    });
});