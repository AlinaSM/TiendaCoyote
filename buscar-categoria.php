<?php
require_once('head.php');
require_once('header.php');
?>

<div class="conteiner p-3 mt-3">
    <div class="row p-3">
        <div class="col-3">
            <h2> <?php echo $_GET['categoria']; ?></h2>
        </div>
        <div class="col-8">
            <!-- Aqui van todos los resultados de la busqueda -->
            <div class="row">

                <a href="#" class="p-0">
                    <div class="col-2 mt-2">
                        <div class="card" style="width: 15rem;">
                            <img class="card-img-top" src="blog.packaging-labelling.com/wp-content/uploads/2016/01/LVA300x250.jpg">
                            <div class="card-body">
                                <p class="card-text m-0"> <b><?php echo "$122.3" ?></b> </p>
                                <h4 class="card-title m-0"><?php echo "producto" ?></h4>
                                <p class=""> <?php echo "Usado" ?> </p>
                            </div>
                        </div>
                    </div>  
                </a>
             
                             
            </div>
        </div>
    </div>
</div>

<?php
require_once('footer.php');
?>