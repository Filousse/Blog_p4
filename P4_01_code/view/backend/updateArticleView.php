<?php $title = "Update article"; ?>
<?php ob_start(); ?>


<br><br>
<h1> Vous modifier le chapitre: <?= $post['title'] ?> </h1>
<br><br>
<button class="btn btn-info col-sm-3 col-sm-offset-7 col-lg-2 col-lg-offset-9"><span class="glyphicon glyphicon-book"></span><a class="text-white" href="index.php?action=dashboard"> administration des chapitres</a></button>
<br><br><br>
<div class="container">
  <form action="index.php?action=update&amp;id=<?= $post['id'] ?>" method="post">
        <label for="author">Nouveau titre du chapitre:</label><br>
        <input type="text" class="form-control" id="author" name="Updatetitle" value=" <?= $post['title'] ?> "/><br>
        <label for="comment">Modifier le texte du chapitre:</label><br>
        <textarea rows="20" name="Updatetext"><?= $post['content'] ?></textarea><br>
        <input type="submit" class="btn btn-primary"></input>
  </form>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
