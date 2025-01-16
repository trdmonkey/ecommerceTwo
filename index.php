<?php require "includes/header.php"; ?>
<?php require "config/config.php"; ?>

<?php 

    $categories = $conn->query("SELECT * FROM categories");
    $categories->execute();

    $allCategories = $categories->fetchAll(PDO::FETCH_OBJ);

?>



    <div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-video text-center bg-dark mb-0 rounded-0">
                <video width="100%" preload="auto" loop autoplay muted>
                    <source src='assets/media/velocidad.mp4' type='video/mp4' />
                    <!-- <source src='assets/media/explore.webm' type='video/webm' /> -->
                </video>
                <div class="container">
                <h1 class="pt-5 text-center text-md-start fs-3 fs-md-1">
                    Tecnochapas<br>
                    El Paisa
                </h1>
                    <p class="lead">
                        Un mundo de repuestos y accesorios para su vehiculo
                    </p>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border-0 text-center">
                                <div class="card-icon">
                                    <div class="card-icon-i">
                                        <i class="fa fa-credit-card"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Compras
                                    </h4>
                                    <p class="card-text">
                                        "Encuentra lo que necesitas desde la comodidad de tu hogar."
                                        Nuestra plataforma te permite explorar una amplia variedad de repuestos, accesorios y lujos para vehículos de manera fácil y segura. Con métodos de pago confiables y una navegación intuitiva, realizar tus compras es más sencillo que nunca.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 text-center">
                                <div class="card-icon">
                                    <div class="card-icon-i">
                                        <i class="fas fa-shopping-basket"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Importacion
                                    </h4>
                                    <p class="card-text">
                                        "Traemos lo que necesitas, directo desde las mejores marcas del mundo."
                                        ¿No encuentras lo que buscas en nuestro catálogo? Ofrecemos un servicio exclusivo de importaciones para conseguir esos repuestos o accesorios únicos que tu vehículo merece, gestionando todo el proceso por ti.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 text-center">
                                <div class="card-icon">
                                    <div class="card-icon-i">
                                        <i class="fa fa-truck"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Entregas
                                    </h4>
                                    <p class="card-text">
                                        "Llevamos tus pedidos donde estés."
                                        No importa si estás en la ciudad o en una zona rural, nos aseguramos de que tus productos lleguen a tiempo y en perfectas condiciones a cualquier rincón del país, con un seguimiento constante para tu tranquilidad.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="why">
            <h2 class="title">Tu vehiculo nuestra prioridad</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-0 text-center gray-bg">
                            <div class="card-icon">
                                <div class="card-icon-i text-success">
                                    <i class="fas fa-user-md"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Asesoramiento especializado
                                </h4>
                                <p class="card-text">
                                    "Expertos que te guían a tomar la mejor decisión."
                                    No estás solo. Nuestro equipo de profesionales en repuestos y accesorios te ayudará a elegir los productos más adecuados para tu vehículo, garantizando que cada compra sea una inversión inteligente.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center gray-bg">
                            <div class="card-icon">
                                <div class="card-icon-i text-success">
                                    <i class="fa fa-cogs"></i>
                                    <!-- <i class="fa fa-wrench"></i> -->
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Instalación profesional
                                </h4>
                                <p class="card-text">
                                    "Garantizamos que todo quede perfecto."
                                    Además de venderte el mejor producto, ofrecemos servicios de instalación con técnicos capacitados para que tus accesorios y repuestos queden perfectamente ajustados y listos para usar.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center gray-bg">
                            <div class="card-icon">
                                <div class="card-icon-i text-success">
                                    <i class="fas fa-smile"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Promociones y paquetes exclusivos
                                </h4>
                                <p class="card-text">
                                    "Ahorra mientras mejoras tu vehículo."
                                    Disfruta de ofertas únicas y paquetes personalizados que combinan accesorios y servicios a precios especiales, diseñados para cuidar tu bolsillo mientras tu vehículo luce y funciona mejor que nunca.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-5 text-center">
                        <a href="shop.php" class="btn btn-primary btn-lg">COMPRAR AHORA</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="categories" class="pb-0 gray-bg">
            <h2 class="title">Categorias</h2>
            <div class="landing-categories owl-carousel">
            <?php foreach($allCategories as $category) : ?>
                <div class="item">
                    <div class="card rounded-0 border-0 text-center">
                        <img src="assets/img/<?php echo $category->image; ?>">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <!-- <h4 class="card-title">Vegetables</h4> -->
                            <a href="shop.php" class="btn btn-primary btn-lg"><?php echo $category->name; ?></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
    
<?php require "./includes/footer.php"; ?>