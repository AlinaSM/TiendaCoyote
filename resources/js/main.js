$(document).ready(function(){
    $('#Estado').val(1);
    recargarLista();
    
    $('#Estado').change(function(){
        recargarLista();
    });
})

function recargarLista(){
    //alert($('#Estado').val());
    let valor = $('#Estado').val();
    $.ajax({
        type: "POST",
        //dataType: 'json'
        url: "php/Controllers/data.php",
        data: "idestado=" + valor,
        //data: {"id_estado" : $('#Estado').val()} 
        
        success : function(r){
            $('#LlenarMuncipios').html(r);
        }

    })
}
