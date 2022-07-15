<?php
    include("con_db.php");
    //if($conexion){
    //    echo "todo nice, conexión realizada";
    //}else{
    //    echo "No se realizo la conexión con la base de datos"
    //}
    if(isset($_POST['registrarse'])) {
        if(strlen($_POST['name'])>=1 && strlen($_POST['email'])>=1 ){
            $name= trim($_POST['name']);
            $email= trim($_POST['email']);
            $fecha_registro=date("d/m/y"); 
            $consulta= "INSERT INTO datos(Nombre, Email, Fecha_registro) VALUES ('$name','$email','$fecha_registro')";
            $resultado = mysqli_query($conexion,$consulta);
            if($resultado){
                ?>
                <h3 class="ok">Te has registrado</h3>
                <?php
            }else{
                ?>
                <h3 class="bad">Ha ocurrido un error</h3>
                <?php
            }
        } else {
            ?>
            <h3 class="bad">Complete los campos</h3>
            <?php
        }
    }
?>