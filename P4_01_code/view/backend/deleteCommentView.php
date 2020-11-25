
<?php $title = 'Update comment view' ?>
<?php ob_start(); ?>


<br><br><br>
<h1>Modifier les commentaires:</h1>
<br><br>
<button class="btn btn-info col-sm-3 col-sm-offset-7 col-lg-2 col-lg-offset-9"><span class="glyphicon glyphicon-book"></span><a class="text-white" href="index.php?action=dashboard"> administration des chapitres</a></button>
<br><br><br><br>
<div class="container">
      <table class="table table-striped">
                  <tr>
                      <th class='col-sm-6 col-sm col-lg-4 col-lg' style="text-align:center" >Auteurs et date des commentaires:</th>
                  </tr>
<?php
foreach ($commentTrue as $comment) {
?>
                <tr>
                  <td><?= $comment['author'] ?></strong> le <?= $comment['comment_date_fr'] ?></td>
                  <td><?= $comment['comment'] ?></td>
                  <td><a href="index.php?action=deletecomment&amp;id=<?= $comment['id'] ?>">Supprimer</a></td>
<?php
}
?>
                </tr>
      </table>
</div>

 <?php $content = ob_get_clean(); ?>
 <?php require('view/template.php'); ?>
