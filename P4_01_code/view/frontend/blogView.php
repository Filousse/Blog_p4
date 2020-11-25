<?php $title = 'Blog page'; ?>
<?php ob_start(); ?>


<br><br><br>
<h1>Choisisez votre chapitres et ses commentaires:</h1>
<br><br><br>
<?php
while ($data = $posts->fetch()) {
?>
              <a href="index.php?action=post&amp;id=<?= $data['id'] ?>" class=" container list-group-item" ><?= $data['title'] ?> </a>
<?php
}
$posts->closeCursor();
?>


<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
