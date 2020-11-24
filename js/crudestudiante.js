
function actualizarReg(idest){

      var idest = idest;

      $.post("updateestudiante.php", {valor1: idest}, function(result){

        $("#contenidoestudiante").html(result);
        $('#contenidoestudiante').show();
      });

}
//funcion que actuliza el registro del estudiante
function updateEstudiante(estudiante){
  
  var idest = estudiante;
  var nombre = $('#nombre').val();
  var appat = $('#appat').val();
          var apmat = $('#apmat').val();
          var ci = $('#ci').val();
          var fono = $('#fono').val();
          var fechanac = $('#fechanac').val();
          var email = $('#email').val();
          //var sexo = $('input[name="sexo"]:checked').val();
          //var carrera = $('#carrera').val();
          var direccion = $('#direccion').val();

          $.post('ejecutarupdate.php',{idest:idest,nombre:nombre,appat:appat,apmat:apmat
            ,ci:ci,fono:fono,fechanac:fechanac,email:email
            ,direccion:direccion},function(result){
              $("#actualizarDiv").html(result);
              $('#actualizarDiv').show(); //mensaje de confirmacion
                

  });

}

function eliminarReg(estudiante){
  alert("delete "+estudiante);
  //var idobt = cliente;

  $.post("deleteestudiante.php", {idobt: estudiante}, function(result){

    $("#actualizarDiv").html(result);
    $('#actualizarDiv').show();
  });
}
