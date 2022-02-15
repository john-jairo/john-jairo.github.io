



    <?php

    include "global/conexion.php";
    include "templates/header.html";
    ?>

    <div class="container">
        <br>
        <div class="row">
            <?php
            $sentencia = $pdo->prepare("SELECT * FROM galeria");
            $sentencia->execute();
            $listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            //print_r($listaProductos);
            ?>

            <?php foreach ($listaProductos as $producto) { ?>

                <div class="col-xxl-3  col-lg-3 col-xs-4">
                    <div class="card">
                        <img class="card-img-top" src="img/<?php echo $producto["imagen"]; ?>" height="317px" ;>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>

    <?php
    include "templates/footer.html"
    ?>