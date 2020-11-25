<?php $title = 'Error page'; ?>
<?php ob_start(); ?>

<br><br><br><br>
<div class="container">
        <br>
        <?php $title = "Erreur sur la page"; ?>
        <h1 ><strong>Une erreur est survenue : <br> <?= $errorMessage ?></strong></h1>
        <br>
</div>
<br><br><br><br>

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
