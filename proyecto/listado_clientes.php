<?php include ("header.php");?>
<div class="container">
    <div class="table-wrapper">
        <div class="table-tittle">
            <div class="row">
                <div class="col-sm-8"><h2>
                    Listado de clientes </h2>
        </div>
    </div>
</div>
    <table id="clientes" class="display">
        <thead>
            <th>ID</th>
            <th>Nombre Completo</th>
            <th>Teléfono</th>
            <th>Direccion</th>
            <th>Correo electronico</th>
            <th>Acciones</th>
        </thead>
            <tbody>
                <?php include("database.php");
                    $clientes = new Database();
                    $listado = $clientes->listadoclientes();
                    while ($row=mysqli_fetch_object($listado)){
                        $id = $row->id;
                        $nombres= $row->nombres. " " .$row->apellidos;
                        $telefono = $row->telefono;
                        $direccion= $row->direccion;
                        $email= $row->correo_electronico;
                    
                
                
                ?>
                
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $nombres ?></td>
                    <td><?php echo $telefono ?></td>
                    <td><?php echo $direccion ?></td>
                    <td><?php echo $email ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $id; ?>" class="edit btn btn-warning" tittle="Editar" data-toogle="tooltip">E</a>
                        <a href="delete.php?id=<?php echo $id; ?>" class="delete btn btn-danger" tittle="Eliminar" data-toogle="tooltip">B</a>
                    </td>
                </tr>
                <?php
                }
                ?>
    
            </tbody>
        </table>
    </div>
</div>



<?php include ("footer.php");?>
