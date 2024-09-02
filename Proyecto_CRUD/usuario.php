<?php include('includes/cabecera.php')?>
     <?php include('dbconfig.php')?>

    <div class="container">
      <div class="row" >
            <div class="col-md-12 mt-5">
                    <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                 
                 <h4 class="mb-0">Bienvenido Usuario</h4>
                 <a class="btn btn-primary" href="logout.php" role="button">Cerrar Sesión</a>
               </div>
                        <div class="card-header">
                            <h1>MANTENIMIENTO DE USUARIOS
                               
                            </h1>
                        </div>
                        <nav class="navbar bg-body-tertiary">
                            <div class="container-fluid">
                            <form class="d-flex" role="search"  method="POST">
                            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" name="buscar_valor" size="40">
                            <button class="btn btn-outline-success" type="submit" name="buscar_btn">Buscar</button>
                          
                          </form>
                            </div>
                          </nav>

                            <div class="card-body"></div>
                            <?php

                            $registro="SELECT * FROM usuario";
                            $registro_run=mysqli_query($conn,$registro);
                            if(mysqli_num_rows($registro_run)>0){
                                ?>

                             <?php
                             if(isset($_POST['buscar_btn'])){
                              //'or'1'='1
                               //$value_buscar=$_POST['buscar_valor'];
                               $value_buscar=mysqli_real_escape_string($conn,$_POST['buscar_valor']);
                               $query_buscar="SELECT * FROM usuario WHERE apellido  LIKE '%$value_buscar%' or nombre  LIKE '%$value_buscar%' ";
                               $query_run_buscar=mysqli_query($conn,$query_buscar);
                               if(mysqli_num_rows($query_run_buscar)>0){
                               

                                   ?>

                            <table class="table table-borderer">
                          <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">NOMBRE</th>
                              <th scope="col">APELLIDO</th>
                              <th scope="col">EMAIL</th>
                              <th scope="col">PASSWORD</th>
                              <th scope="col">CELULAR</th>
                             
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                               while($reg_row=mysqli_fetch_array($registro_run)){
                               
                            ?>
                            <?php
                             
                                while ($reg_row=mysqli_fetch_array($query_run_buscar)){
                            ?>
                           
                            <tr>
                              <th><?php  echo $reg_row['id_usuario']; ?></th>
                              <td><?php  echo $reg_row['nombre']; ?></td>
                              <td><?php  echo $reg_row['apellido']; ?></td>
                              <td><?php  echo $reg_row['email']; ?></td>
                              <td><?php  echo $reg_row['password']; ?></td>
                              <td><?php  echo $reg_row['celular']; ?></td>
                              
                              <td>
                                
                              
                              </td>
                              
                            </tr>
                            <?php  }  ?>
                            <?php  }  ?>
                          </tbody>
                        </table>
                        <?php
                              }else{
                                echo "No existen registros";
                              }
                            ?>
                               <?php
                              }else{
                                echo "No existen registros";
                            }}
                            ?>
                    </div>

            </div>

      </div>  

    </div>
                        </table>
                        
                    </div>

            </div>

      </div>  

    </div>

    <?php include('includes/pie.php')?>