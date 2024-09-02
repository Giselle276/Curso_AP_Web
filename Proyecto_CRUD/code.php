
  <?php include('dbconfig.php')?>
  <?php
if(isset($_POST['registrar_btn'])){

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $celular=$_POST['celular'];

    $query="INSERT INTO usuario (nombre,apellido,email,password,celular) VALUES('$nombre','$apellido','$email','$password','$celular')";
    $query_run=mysqli_query($conn,$query);

    if($query_run){
        // echo "Registro Completado";
        $_SESSION['status']="Usuario Registrado Correctamente";
        $_SESSION['status_code'] = "success";
        header ('Location:index.php');
    }
    else{
        // echo "No hay conexión";
        $_SESSION['status']="Usuario No Registrado";
        $_SESSION['status_code']="error";
        header ('Location:registrar.php');
    }
}
if(isset($_POST['modificar_btn'])){
    $modificar_id=$_POST['modificar_id'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $celular=$_POST['celular'];

    $query_modificar="UPDATE usuario SET nombre='$nombre',apellido='$apellido',email='$email',password='$password',celular='$celular' WHERE id_usuario='$modificar_id'";
    $query_update_run=mysqli_query($conn, $query_modificar);

    if($query_update_run){
        $_SESSION['status']="Usuario Actualizado Correctamente";
        $_SESSION['status_code']="success";
        // echo "Registro Actualizado";
        header("Location:index.php");
    }
    else{
        $_SESSION['status']="Usuario No Actualizado";
        $_SESSION['status_code']="error";
        // echo "Registro No Actualizado";
        header("Location:index.php");
    }
}

    if(isset($_POST['eliminar_btn'])){
        $eliminar_id=$_POST['eliminar_id'];
        $reg_query="DELETE FROM usuario WHERE id_usuario='$eliminar_id'";
        $reg_query_run=mysqli_query($conn,$reg_query);

        if($reg_query_run){
            // echo "Registro Eliminado";
            $_SESSION['status']="Usuario Eliminado";
            $_SESSION['status_code']="success";

            header("Location:index.php");
        }
        else{
            // echo "Registro NO Eliminado";
            $_SESSION['status']="Usuario No Eliminado";
            $_SESSION['status_code']="error";
            header("Location:index.php");

        }

    }

    if(isset($_POST['buscar_btn'])){

        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $celular=$_POST['celular'];
    
        $query="SELECT * FROM usuario  WHERE apellido LIKE '%$apellido%' ";
        $query_run=mysqli_query($conn,$query);
    
        if($query_run){

            header ('Location:index.php');
        }
        else{
           

            header ('Location:index.php');
        }
    }

?>