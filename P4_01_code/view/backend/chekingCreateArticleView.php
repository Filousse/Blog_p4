<?php $title = 'Create article confirmation' ?>
<?php ob_start(); ?>

<br><br><br><br><br><br>
<div class="container">
    <br><br>
    <h1>Votre chapitre a bien été créer.</h1>
    <br>
    <button class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-user"></span><a class="text-white" href="index.php?action=dashboard"> Revenir à l'administration des chapitres</a></button>
    <br><br>
</div>


 <?php $content = ob_get_clean(); ?>
 <?php require('view/template.php'); ?>
