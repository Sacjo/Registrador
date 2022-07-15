<?php

    $inc=include("con_db.php");
    if($inc){
        $consulta= "SELECT * FROM datos";
        $resultado = mysqli_query($conexion,$consulta);
        if($resultado){
            while($row = $resultado->fetch_array()){
                $id= $row['id'];
                $nombre= $row['Nombre'];
                $email= $row['Email'];
                $fechaRegistro= $row['Fecha_registro'];
            
            ?>
            <div>
                <h2><?php echo $nombre ?></h2>
                <div>
                    <p>
                        <b> Id:</b><?php echo $id?> <br>
                        <b> Email:</b><?php echo $email?> <br>
                        <b> Fecha de Registro:</b><?php echo $fechaRegistro ?> <br>
                    </p>
                </div>
            </div>
            <?php
            }
        }
    }

?>