<?php include ("vista/cabecera.php"); ?>

<?php
  $conexion = mysqli_connect("localhost", "root", "", "bdproyecto") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into reportes(numsituacion, nombre, apellido, area, tipo, nivelgravedad, fecha, hora, observacion) values
                       (null,'$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[area]','$_REQUEST[tipo]','$_REQUEST[nivelgravedad]','$_REQUEST[fecha]','$_REQUEST[hora]', '$_REQUEST[observacion]')")
    or die("Problemas en el select" . mysqli_error($conexion));
    header("location:tablareporte.php");

  mysqli_close($conexion);
?>

<?php if ($_POST)  {?>
      
      <script>
          Swal.fire({
          icon: 'success',
          title: "usted ha sido registrado con exito ",
          showConfirmButton: false,
          timer: 1500
          })
      </script>
      
<?php  } ?>


<?php include ("vista/pie.php"); ?>

