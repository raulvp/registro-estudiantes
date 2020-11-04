
function actualizarReg(idObt){

      var idobt = idObt;

      $.post("updatecliente.php", {valor1: idobt}, function(result){

        $("#contenidocliente").html(result);
        $('#contenidocliente').show();
      });

}

function updateCliente(cliente){
  var idobtenido = cliente;
  var nombre = $("#nombre").val();
  //alert(nombre);
  var apellido = $("#apellido").val();
  var cedula = $("#cedula").val();
  var fonofijo = $("#fonofijo").val();
  var fonocelular = $("#fonomovil").val();
  var dir = $("#direccion").val();
  $.post("ejecutarupdate.php", {idobtenido: idobtenido,nombre:nombre,
  apellido:apellido,cedula:cedula,fonofijo:fonofijo,fonocelular:fonocelular,
  dir:dir}, function(result){
    $("#actualizarDiv").html(result);
    $('#actualizarDiv').show();

  });

}

function eliminarReg(cliente){
  alert("delete "+cliente);
  //var idobt = cliente;

  $.post("deletecliente.php", {idobt: cliente}, function(result){

    $("#actualizarDiv").html(result);
    $('#actualizarDiv').show();
  });
}
