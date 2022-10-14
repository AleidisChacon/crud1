<?php include ("vista/cabecera.php"); ?>

<?php
  $conexion = mysqli_connect("bmngmuaitnqhhyyxndit-postgresql.services.clever-cloud.com", "u6zmvje9lanojfhljp3j", "ISBsQ7vYwfAucHyibbt0", "bmngmuaitnqhhyyxndit") or
  die("Problemas con la conexión");

    if ($_POST){
      $numsituacion=$_POST['numsituacion'];
      $accion=$_POST['accion'];
  
  switch ($accion) {
   case "Borrar": 
     $registros = mysqli_query($conexion, "delete from reportes where numsituacion=$numsituacion");
    break;

    case "Registrar": 
      mysqli_query($conexion, "insert into reportes(nombre,apellido,area,tipo,nivelgravedad,fecha,hora,observacion) values 
      ('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[area]','$_REQUEST[tipo]','$_REQUEST[nivelgravedad]','$_REQUEST[fecha]','$_REQUEST[hora]','$_REQUEST[observacion]')")
      or die("Problemas en el select" . mysqli_error($conexion));
      header("location:tablareporte.php");
      mysqli_close($conexion);
break;
    
   default:
     echo "No existe";
  }
  }
  $registros = mysqli_query($conexion, "select * from reportes") or
    die("Problemas en el select:" . mysqli_error($conexion));
   
    ?>

<center>
<div class="card" >
     <div class="card-header"><h1>TABLA DE REGISTRO</h1></div>
         <div class="card-body">
<table class="table  table-striped table-bordered table-hover display"  id="tablaregistro">
    <thead>
    <tr>
        <th> Numerosituacion </th>
        <th> Nombre </th>
        <th> Apellido </th>
        <th> Area </th>
        <th> Tipo Gravedad </th>
        <th> Nivel Gravedad </th>
        <th> Fecha </th>
        <th> Hora </th>
        <th> Observacion </th>
       
    </tr>
    </thead>
    <tbody>
        <tr>
         <?php
        while ($reg = mysqli_fetch_array($registros)) { ?> 
            <td> <?php echo  $reg['numsituacion'] . "<br>"; ?></td>
           <td> <?php echo  $reg['nombre'] . "<br>"; ?></td>
           <td> <?php echo  $reg['apellido'] . "<br>"; ?></td>
           <td> <?php echo $reg['area'] . "<br>"; ?></td>
           <td> <?php echo  $reg['tipo'] . "<br>"; ?></td>
           <td> <?php echo  $reg['nivelgravedad'] . "<br>"; ?></td>
           <td> <?php echo $reg['fecha'] . "<br>"; ?></td>
           <td> <?php  echo $reg['hora'] . "<br>"; ?></td>
           <td> <?php  echo  $reg['observacion'] . "<br>"; ?></td>

            <td> <form action="modificar.php" method="post"> 
            <input type="hidden" name="numsituacion" value="<?php echo $reg['numsituacion'] ; ?>">
            <button type="submit" class="btn btn-success">Editar</button> </form></td>
          
            <td><form action="" method="post">
            <input type="hidden" name="numsituacion" value="<?php echo $reg['numsituacion'] ; ?>">
            <button type="submit" class="btn btn-danger" name="accion" value="Borrar">Borrar</button></form></td> 
            </tr>
        <?php
      }
      ?>
    </tbody>
</table>
          <center>
            <div>
            <a href="index.php">
            <button type="submit" class="btn btn-primary" name="accion" >Nuevo Registro</button></a>
            </div>
          </center>
</div>
</div>
</div>

<script>
    var tabla=document.querySelector("#tablaregistro");

    var dataTable = new DataTable(tabla,{
      perPage:3,
      perPageSelect:[3,6,9,12]
    });
  </script>
</center>

<?php include ("vista/pie.php"); ?>