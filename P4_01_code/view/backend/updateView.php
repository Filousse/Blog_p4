<?php $title = "UpdateArticle"; ?>
<?php ob_start(); ?>

<h1>Update Article:</h1>

<h1> Vous modifier l'article ayant comme titre: <?= $post['title'] ?> </h1>
<br><br>
<form action="index.php?action=update&amp;id=<?= $post['id'] ?>" method="post">
      <div>
         <label for="author">Titre:</label><br />
         <input type="text" id="author" name="Updatetitle" value=" <?= $post['title'] ?> "/>
     </div>
     <div>
         <label for="comment">Commentaire</label><br />
         <textarea id="comment" name="Updatetext"><?= $post['content'] ?></textarea>
     </div>
     <br>
     <div>
         <input type="submit" />
     </div>
     <br>
</form>

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
