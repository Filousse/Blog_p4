<?php $title = 'Post page'; ?>
<?php ob_start(); ?>


<br><br><br><br>
<div class="container">
        <h1 class="well">
          <?= $post['title']?>
        </h1>
        <p>
          <?= $post['content'] ?> <em> le <?= $post['creation_date_fr'] ?> </em>
        </p>
        <button class="btn btn-info btn-lg" type="button" ><span class="glyphicon glyphicon-book"></span><a class="text-white" href="index.php?action=blog">  Retour à la liste des chapitres</a></button>
</div>

<h1>Ecrivez un commentaire:</h1>
<div class="container">
<form action="index.php?action=addComment&amp;id=<?= $post['id']?>" method="post">
        <label for="author">Auteur du commentaire:</label><br />
        <input type="text" class="form-control" id="author" name="author" /><br>
        <label for="comment">Commentaire:</label><br />
        <textarea id="comment"class="form-control" name="comment"></textarea><br>
        <input type="submit" class="col-sm-2 btn btn btn-primary"/>
</form>
</div>

<h1>Liste des commentaires:</h1>
<?php
while ($comment = $comments->fetch())
{
?>
<br>
<div class="container">
    <h1 class="well">
      <strong><?= $comment['author'] ?></strong>
    </h1>
    <p><?= $comment['comment'] ?></p>
    <div class="col-lg-12 col-lg-offset-5">
      <?= $comment['comment_date_fr'] ?>
    </div>
    <button type="submit" class="col-sm-2 btn btn btn-primary"><span class="glyphicon glyphicon-alert"></span><a class= "text-white" href="index.php?action=signaler&amp;post_id=<?= $comment['post_id'] ?>&amp;id=<?= $comment['id'] ?>"> SIGNALER </a></button>
</div>

<?php
}
?>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
