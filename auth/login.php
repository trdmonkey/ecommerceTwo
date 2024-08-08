<?php 
    require "../includes/header.php"; 
    require "../config/config.php";    
?>

<?php

if(isset($_SESSION['username'])) {
    echo "<script> window.location.href='".APPURL."'; </script>";
}


if (isset($_POST['submit'])) {

    if (empty($_POST['email']) or empty($_POST['password'])) {
        echo "<script>alert('Uno o mas campos estan vacíos!');</script>";
    } else {

        $email = $_POST['email'];
        $password = $_POST['password'];

        
        /* QUERY */
        $login = $conn->query("SELECT * FROM users WHERE email='$email'");
        $login->execute();

        $fetch = $login->fetch(PDO::FETCH_ASSOC);
        // var_dump($fetch);

        if($login->rowCount() > 0) {

            // echo $login->rowCount();
            if(password_verify($password, $fetch['password'])) {

                // echo "LOGUEADO";
                $_SESSION['username'] = $fetch['username'];
                $_SESSION['fullname'] = $fetch['fullname'];
                $_SESSION['password'] = $fetch['password'];
                $_SESSION['id'] = $fetch['id'];
                $_SESSION['email'] = $fetch['email'];
                $_SESSION['image'] = $fetch['image'];

                echo "<script> window.location.href='".APPURL."'; </script>";
                
            } else {

                echo "<script>alert('Los campos de correo y/o contraseña son incorrectos!');</script>";

            }

        } else {
            echo "<script>alert('Correo electronico incorrecto!');</script>";
        }

    }
    
}

?>

    <div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('<?php echo APPURL; ?>/assets/img/bg-headerTwo.webp');">
                <div class="container">
                    <h1 class="pt-5">
                        Inicio de sesión
                    </h1>
                    <p class="lead">
                        Ahorra tiempo y déjanos la compra a nosotros.
                    </p>

                    <div class="card card-login mb-5">
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="login.php">
                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <input class="form-control" name="email" type="text" required="" placeholder="Correo Electronico">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input class="form-control" name="password" type="password" required="" placeholder="Contraseña">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12 d-flex justify-content-between align-items-center">
                                        <!-- <div class="checkbox">
                                            <input id="checkbox0" type="checkbox" name="remember">
                                            <label for="checkbox0" class="mb-0"> Remember Me? </label>
                                        </div> -->
                                        <!-- <a href="login.html" class="text-light"><i class="fa fa-bell"></i> Forgot password?</a> -->
                                    </div>
                                </div>
                                <div class="form-group row text-center mt-4">
                                    <div class="col-md-12">
                                        <button name="submit" type="submit" class="btn btn-primary btn-block text-uppercase">Entrar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
    require "../includes/footer.php"; 
    ?>
