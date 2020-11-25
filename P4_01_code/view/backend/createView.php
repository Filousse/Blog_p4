
<?php $title = 'CreateArticle' ?>
<?php ob_start(); ?>

<h2>Ecrire un nouveau chapitre du livre : </h2>
<form action="index.php?action=addArticle" method="post">
      <div>
         <label for="author">Titre du chapitre: </label><br />
         <input type="text" id="author" name="title" />
     </div>
     <div>
         <label for="comment">Contenu du chapitre</label><br />
         <textarea id="comment" name="text"></textarea>
     </div>
     <br>
     <div>
         <input type="submit" />
     </div>
     <br>
</form>

 <?php $content = ob_get_clean(); ?>
 <?php require('view/template.php'); ?>
