
    function actualizar(id){

    
        var btnEnviar = $("#Pendiente"+id);
        var url =  $('#ruta_acutaliza'+id).val();
        var toquen = $('#toquen').val();

        datos = {
            _token :toquen,
            id :id,
        }

        $.ajax({
            type: 'PUT',
            url: url,
            data: datos, 
            beforeSend: function(){
            
                btnEnviar.html("Enviando..."); 
                btnEnviar.attr("disabled","disabled");
            },
            success: function(data){
                alert("El aspirante se ha actualizado correctamente");
                btnEnviar.html("Llamado"); 
                btnEnviar.attr("disabled","disabled");
        
                
            },
            error: function(data){
       
                alert("Problemas al tratar de enviar el formulario");
                btnEnviar.html("Pendiente");
                btnEnviar.removeAttr("disabled");
               
            }
        });

        return false;
    }
