
<?php $title = 'Notify' ?>
<?php ob_start(); ?>


<br><br>
<h1>Supprimé les commentaires signaler:</h1>
<br><br>
<button class="btn btn-info col-sm-3 col-sm-offset-7 col-lg-2 col-lg-offset-9"><span class="glyphicon glyphicon-book"></span><a class="text-white" href="index.php?action=dashboard"> administration des chapitres</a></button>
<br><br><br>
<div class="container">
      <table class="table table-striped">
        <tr>
          <th>Titre du chapitre</th>
          <th>Auteur du commentaire</th>
          <th>Commentaire</th>
          <th>Action</th>
        </tr>
<?php
$allPost= $posts->fetchAll();
?>
<?php
while ($comment = $comments->fetch()) {
if ($comment['notify'] === "1") {
?>
            <tr>
              <td>
<?php
foreach($allPost as $post) {
  if($post['id'] === $comment['post_id']) {
    echo $post['title'];
    break;
  }
}
?>
              </td>
              <td><?= $comment['author'] ?> </td>
              <td><?= $comment['comment'] ?> </td>
              <td><a href="index.php?action=deletecomment&amp;id=<?= $comment['id'] ?>">Supprimer</a></td>
            </tr>
            <?php
          }
        }
        ?>
      </table>
</div>


 <?php $content = ob_get_clean(); ?>
 <?php require('view/template.php'); ?>
