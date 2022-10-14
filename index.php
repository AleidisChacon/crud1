<?php include ("vista/cabecera.php"); ?>


<body>

           <center>
          <div class="card" style=" width: 1200px; height: 80 0px; border-radius: 10px; border: solid 1px black; margin-top: 30px;">
            <div class="card-header"><h1>REGISTRO DE SITUACIÓN</h1></div>
            <div class="card-body">
            <form action="conexion.php" method="post" >
            <div class="row">
              <div class="col">
                <label for="">Nombre</label>
                <input type="text" class="form-control" placeholder="Nombres" name="nombre">
              </div>
              <div class="col">
                <label for="" >Apellido</label>
                <input type="text" class="form-control" placeholder="Apellidos" name="apellido">
              </div>
            </div>
            <br>
            <div class="form-group col">
              <label for=""> Area accidente</label>
                <input type="text" class="form-control" placeholder="ingresa el area del accidente" name="area">
            </div>
            
            <div class="col">
                <label for="" >Tipo de gravedad</label>
                <input type="text" class="form-control" placeholder="escribe el tipo de gravedad" name="tipo">
              </div>
            </div>
  
            <div class="form-group col">
              <label for="">Nivel de gravedad</label>
                <select id="disabledSelect" class="form-control" name="nivelgravedad">
                  <option disabled selected>Seleccione el nivel de gravedad</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                
                </select>
            </div>
            
            <div class="form-group col">
              <label for="">Fecha</label>
                <input type="date" class="form-control" placeholder="ingresa la fecha" name="fecha">
            </div>
            <div class="form-group col">
              <label for="">Hora</label>
                <input type="datetime" class="form-control" placeholder="ingresa la hora" name="hora">
            </div>
            <div class="form-group col">
              <label for="">Observaciones</label>
              <textarea class="form-control" name="observacion" id="" cols="30" rows="10" placeholder="escribe la observacion"></textarea>
            </div>
            <div class="card-footer">
               <button type="submit" class="btn btn-primary" value="Registrar">Guardar</button>
            </div>
          </div>
          </div>

          </form>
          </center>
   

</body>
</html>

<?php include ("vista/pie.php"); ?>