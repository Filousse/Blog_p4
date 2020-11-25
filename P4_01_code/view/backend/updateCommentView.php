
<?php $title = 'commentUpdateView' ?>
<?php ob_start(); ?>

<h1>Modifier les commentaires:</h1>
<table class="ArrayData">
     <tr>
          <th>Titre</th>
          <th>Texte</th>
          <th><em>Action</th>
     </tr>
<?php
 while ($comment = $comments->fetch()) {
?>
     <tr>
           <td><?= $comment['author'] ?></strong> le <?= $comment['comment_date_fr'] ?></td>
           <td><?= $comment['comment'] ?> (...)</td>
           <td>
                 <a href="index.php?action=deletecomment&amp;id=<?= $comment['id'] ?>">Supprimer</a>
<?php
}
?>
           </td>
     </tr>
 </table>

 <?php $content = ob_get_clean(); ?>
 <?php require('view/template.php'); ?>
