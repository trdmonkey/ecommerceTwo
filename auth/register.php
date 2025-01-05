<?php 
    require "../includes/header.php"; 
    require "../config/config.php";    
?>


<?php

if(isset($_SESSION['username'])) {
    echo "<script> window.location.href='".APPURL."'; </script>";
}

if (isset($_POST['submit'])) {

    if (empty($_POST['fullname']) or empty($_POST['email']) or empty($_POST['username']) or empty($_POST['password'])) {
        echo "<script>alert('Uno o mas campos estan vacíos!');</script>";
    } else {

        // echo "<script>alert('Buena mano!');</script>";
        if ($_POST['password'] == $_POST['confirm_password']) {

            $fullname = $_POST['fullname'];
            $mail = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $image = "user.png";
            // $created_at = $_POST['created_at'];

            /* $insert = "insert into users(fullname, mail, username, password, image, created_at) values('astrid','astrid@mail.com','astrid','astrid','','') "; */
            $insert = $conn->prepare("INSERT INTO users(
                fullname, 
                email, 
                username, 
                password, 
                image
            ) VALUES(
                :fullname,
                :email,
                :username,
                :password,
                :image
            )");

            $insert->execute([
                ":fullname" => $fullname,
                ":email" => $mail,
                ":username" => $username,
                ":password" => password_hash($password, PASSWORD_BCRYPT),
                ":image" => $image
            ]);

            echo "<script> window.location.href='login.php'; </script>";

            // header("Location: login.php");
            // header("Location:".APPURL."/auth/login.php");
            ?>
                <!-- <script>
                    window.location.href = "<?php /* echo APPURL; */ ?>/auth/login.php";
                </script> -->
            <?php
        } else {
            echo "<script>alert('Las contraseñas no coínciden, por favor escriba bien, pendejo!')</script>";
        }
    }
}

?>

<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('<?php echo APPURL; ?>/assets/img/bg-headerTwo.webp');">
            <div class="container">
                <h1 class="pt-5">
                    Registrate
                </h1>
                <p class="lead">
                    Ahorra tiempo y déjanos la compra a nosotros.
                </p>

                <div class="card card-login mb-5">
                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="register.php">
                            <div class="form-group row mt-3">
                                <div class="col-md-12">
                                    <input class="form-control" name="fullname" type="text" required placeholder="Full Name">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <div class="col-md-12">
                                    <input class="form-control" name="email" type="email" required placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <div class="col-md-12">
                                    <input class="form-control" name="username" type="text" required placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input class="form-control" name="password" type="password" required placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input class="form-control" name="confirm_password" type="password" required placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <!-- <div class="col-md-12">
                                    <div class="checkbox">
                                        <input id="checkbox0" type="checkbox" name="terms">
                                        <label for="checkbox0" class="mb-0">I Agree with <a href="terms.html" class="text-light">Terms & Conditions</a> </label>
                                    </div>
                                </div> -->
                            </div>
                            <div class="form-group row text-center mt-4">
                                <div class="col-md-12">
                                    <button type="submit" name="submit" class="btn btn-primary btn-block text-uppercase">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require "../includes/footer.php"; ?>