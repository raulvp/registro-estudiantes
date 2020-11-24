<?php

include "conexiones/conexionbd.php";
conectarbd();

$idest = $_POST['idest'];
$nombreest = $_POST['nombre'];
$appaterno = $_POST['appat'];
$apmaterno = $_POST['apmat'];
$cedulaid = $_POST['ci'];
$telefono = $_POST['fono'];
$direccion = $_POST['direccion'];

/********actualizacion****************/
$sqlupdate = "update estudiante SET nombreest='$nombreest',appaterno='$appaterno',
apmaterno='$apmaterno',cedulaid='$cedulaid',telefono='$telefono',direccion ='$direccion' where idest = '$idest'";
$consulta1 = mysqli_query($conex, $sqlupdate);


$sqlmostrar = "select idest,nombreest,appaterno,apmaterno,telefono,
cedulaid, direccion from estudiante";
$consulta = mysqli_query($conex, $sqlmostrar);

?>
<table class="table">
      <thead class="thead-light">
      <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Cedula Identidad</th>
            <th scope="col">Fono Fijo</th>
            <th scope="col">Celular</th>
            <th scope="col">Direccion</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
      </thead>
      <tbody>
        <?php

$contador=0;
while($fila = mysqli_fetch_assoc($consulta)){
    $contador++;
    echo "<tr>";
        $idActualizar = $fila['idest'];
        echo "<td>".$contador."</td>";
        echo "<td>".$fila['nombreest']."</td>";
        echo "<td>".$fila['appaterno']."</td>";
        echo "<td>".$fila['apmaterno']."</td>";
        echo "<td>".$fila['cedulaid']."</td>";
        echo "<td>".$fila['telefono']."</td>";
        echo "<td>".$fila['direccion']."</td>";
        
  ?>
        <td><button type='button' class='btn btn-warning' data-toggle='modal' data-target='#update' onClick='actualizarReg(<?php echo $idActualizar;?>)'>Actualizar</button></td>
        <td><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#delete' onClick='eliminarReg(<?php echo $idActualizar;?>)'>Eliminar</button></td>
    </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
