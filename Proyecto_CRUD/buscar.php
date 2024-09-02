
<?php include('includes/cabecera.php')?>
    <?php include('dbconfig.php')?>

    <?php
    $columns=['nombre','apellido','email','celular'];
    $table="registro";
    $campo=$conn->real_escape_string($_POST['campo']);

    ?>

