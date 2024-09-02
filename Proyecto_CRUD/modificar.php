
<?php 

include('includes/cabecera.php')
?>
    <?php include('dbconfig.php')?>
  

<?php
$id_usuario=$_GET['id_usuario'];
$registro_query="SELECT * FROM usuario where id_usuario='$id_usuario'";
$registro_query_run=mysqli_query($conn,$registro_query);

    if(mysqli_num_rows($registro_query_run)>0){
        while($row=mysqli_fetch_array($registro_query_run)){
            
            ?>


<div class="container">
    <div class="row">
        <div class="col.md-10">
            <div class="card">
                    <div class="card-header">
                    <h4>Actualización de Usuario</h4>
                    </div>
                    <div class="card-body">
                    <form action="code.php" method="POST">
                    <input type="hidden" name="modificar_id" class="form-control" value="<?php echo $row['id_usuario']; ?>">
                        <div class="mb-3">
                          <label >Nombre</label>
                          <input type="text" name="nombre" class="form-control" value="<?php echo $row['nombre']; ?>">
                        </div>
                        <div class="mb-3">
                          <label >Apellido</label>
                          <input type="text" name="apellido" class="form-control" value="<?php echo $row['apellido']; ?>">
                        </div>
                        
                        <div class="mb-3">
                          <label >Email address</label>
                          <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>">
                        </div>
                        <div class="mb-3">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control" value="<?php echo $row['password']; ?>">
                        </div>

                        <div class="mb-3">
                          <label >Celular</label>
                          <input type="text" name="celular" class="form-control" value="<?php echo $row['celular']; ?>">
                        </div>
                        <a href="index.php" class="btn btn-danger">Cancelar</a>
                        <button type="submit" name="modificar_btn" class="btn btn-info">Actualizar</button>
                        </form>

                    </div>

            </div>

        </div>

    </div>

</div>
<?php
        }

    }
    else{
        echo "No hay registros para mostrar";
    }
?>

<?php include('includes/pie.php')?>