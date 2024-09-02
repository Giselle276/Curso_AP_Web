<?php
    include('includes/cabecera.php')
?>
<div class="container">
    <div class="row">
        <div class="col.md-10">
            <div class="card">
                    <div class="card-header">
                    <h4>Registro de Usuario</h4>
                    </div>
                    <div class="card-body">
                    <form action="code.php" method="POST" name="form_registro" id="form_registro">
                        <div class="mb-3">
                          <label >Nombre</label>
                          <input type="text" name="nombre" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label >Apellido</label>
                          <input type="text" name="apellido" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                          <label >Email</label>
                          <input type="text" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control">
                        </div>

                        <div class="mb-3">
                          <label >Celular</label>
                          <input type="text" name="celular" class="form-control">
                        </div>
                        <a href="index.php" class="btn btn-danger">Cancelar</a>
                        <button type="submit" name="registrar_btn" class="btn btn-primary">Registrar</button>
                        </form>

                    </div>

            </div>

        </div>

    </div>

</div>

<?php include('includes/pie.php')?>