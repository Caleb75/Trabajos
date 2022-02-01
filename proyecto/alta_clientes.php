<?php
include ("header.php");
?>
<body>
    <div class="container">
        <div class="col-sm-8"><h2>Agregar Cliente</h2></div>
        
        <?php
        include ("database.php");
        $clientes = new Database();
        if(isset($_POST) && !empty($_POST)){
            $nombres = $clientes->sanitize($_POST['nombres']);
            $apellidos = $clientes->sanitize($_POST['apellidos']);
            $telefono = $clientes->sanitize($_POST['telefono']);
            $direccion = $clientes->sanitize($_POST['direccion']);
            $correo_electronico = $clientes->sanitize($_POST['correo_electronico']);

            $res = $clientes->create($nombres,$apellidos,$telefono,$direccion,$correo_electronico);
            if($res){
                $message = "Datos insertados con èxito!!";
                $class ="alert alert-success";
            }
            else{
                $message= "Error en la inserciòn!!";
                $class= "alert alert-danger";
            }
            ?>
            <div class ="<?php echo $class;?>">
            <?php echo $message; ?>
            </div>
            <?php
        }
        ?>

        <div class="row">
        <form method="POST">
  <div class="mb-3">
    
    <input type="text" class="form-control" name="nombres" id="nombres"  placeholder="Ingresar nombre" required>
  </div>
  <div class="mb-3">
    
    <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Ingresar apellidos" required>
  </div>
  <div class="mb-3">
   
    <input type="number" class="form-control" name="telefono" id="telefono" placeholder="Ingresar telefono" required>
  </div>
  <div class="mb-3">
    
    <textarea class="form-control" name="direccion" id="direccion" placeholder="Ingresar dirección" required>
</textarea>
  </div>
  <div class="mb-3">
    
    <input type="email" class="form-control" name="correo_electronico" id="correo_electronico"  placeholder="Ingresar correo electronico" required>
  </div>
  <div class="col-md-12 pull-right">
      <button type="submit" class="btn btn-success">Guardar Registro</button> 
</form>
</body>
<?php
include ("footer.php");
?>

