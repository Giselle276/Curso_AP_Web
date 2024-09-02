
     <?php include('acceso.php')?>

    <title>LOGIN</title>
     <script src="js/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link rel="stylesheet" href="css/bulma.min.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo_login.css">


<div class="main-container">
<div class="login-container">
        
<form class="box login" action="login.php" method="POST" autocomplete="off" >
    <h5 class="title is-5 has-text-centered is-uppercase">LOGIN</h5>

    <div class="field">
        <label class="label">Usuario</label>
        <div class="control">
            <input class="input" type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
        </div>
    </div>

    <div class="field">
          <label class="label">Clave</label>
          <div class="control">
            <input class="input" type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
          </div>
    </div>

    <p class="has-text-centered mb-4 mt-3">
        <button type="submit" class="button is-info is-rounded">Iniciar sesion</button>
    </p>
        <!-- Mensaje de error -->
        <?php if (isset($error_message)): ?>
            <div class="alert-custom">
                <strong>Error:</strong> <?php echo htmlspecialchars($error_message); ?>
            </div>
        <?php endif; ?>
</form>
<img src="img/usuario.jpg" alt="User Icon" class="user-icon">
</div> 


