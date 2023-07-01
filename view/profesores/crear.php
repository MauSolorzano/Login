<?php
require 'view/header.php';
require 'view/menu.php';
?>
<div class="container-fluid" id="contendorprincipal">
    <section id="apartado" class="text-center">
        <h1 id="P1"><?php echo $this->mensaje; ?></h1>
    </section>
    <form class="form-control" action="<?php echo constant('URL'); ?>profesores/insertarProfesor" method="POST">
        <?php require 'form.php'; ?>
    </form>
</div>
<?php
require 'view/footer.php';
?>