<?php
session_start();
$conn=mysqli_connect("localhost","root","","registro");



if(!$conn){
    die("Error de conexión: " . mysqli_connect_error());
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["login_usuario"];
    $password=$_POST["login_clave"];
    $stmt = $conn->prepare("SELECT * FROM login WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row_tipo = $result->fetch_assoc();
        
        if ($row_tipo["usertype"] == "user") {
            $_SESSION["username"] = $username;
            header("Location: usuario.php");
            exit(); // Asegurarse de que el script se detenga después de redirigir
        } elseif ($row_tipo["usertype"] == "admin") {
            $_SESSION["username"] = $username;
            header("Location: index.php");
            exit(); // Asegurarse de que el script se detenga después de redirigir
        } else {
            $error_message = "Acceso Denegado";
        }
    } else {
        $error_message = "Usuario o contraseña incorrectos";
    }

   $stmt->close();
 
}
 $conn->close();


?>
