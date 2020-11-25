<?php $title = 'Home page'; ?>
<?php ob_start(); ?>


<br><br><br><br>
<h1 style= "font-family:georgia,garamond,serif;font-size:40px;font-style:italic;">Dernier chapitre publié:</h1>
<br><br>

<?php
while ($data = $posts->fetch())
{
  $content = $data['content'];
$extraitContent = substr($content,0,700);
?>
<div class="container">
            <h1 class="list-group-item-heading"> <?= $data['title'] ?> </h1>
            <em class="col-lg-12">publier le <?= $data['date_creation_fr'] ?></em>
            <br>
            <img class="col-lg-3" src="public\images\chap1.jpg">
            <p class="col-lg-9"> <?= $extraitContent ?> (...)</p>
            <button type="button" class="btn btn-info" ><a class="text-white" href="index.php?action=post&amp;id=<?= $data['id']?>" >Lire le chapitre</a></button>
</div>
<?php
}
$posts->closeCursor();
?>


<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
