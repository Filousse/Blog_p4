<?php $title = 'dashboard'; ?>
<?php ob_start();


require_once('controller/backend/AdminController.php');
    if (isset($_SESSION['userName']))
    {
      ?>
      <br><br>
      <button type="button" class="btn btn-warning col-sm-2 col-sm-offset-9 col-lg-1 col-lg-offset-10" ><span class="glyphicon glyphicon-user"></span><a class="text-white" href="index.php?action=logout">  Se déconnecter</a></button>
      <br>
      <h1> Bienvenue dans votre administration <?php echo $_SESSION['userName']?>:</h1>
      <div class="container">
         <table class="table table-striped">
              <tr>
                    <th class='col-sm-6 col-sm col-lg-4 col-lg ' style="text-align:center" >Noms des chapitres:</th>
              </tr>
<?php foreach($postsArray as $data): ?>
              <tr>
                    <td><?= $data['title'] ?></td>
                    <td>
                          <a href="index.php?action=openupdate&amp;id=<?php echo $data['id'] ?>">Modifier</a>
                    </td>
                    <td>
                          <a href="index.php?action=delete&amp;id=<?php echo $data['id'] ?>">Supprimer</a>
                    </td>
                    <td>
                          <a href="index.php?action=comment&amp;id=<?php echo $data['id'] ?>">Commentaires</a>
                    </td>
                    </td>
              </tr>
<?php endforeach; ?>
      </table>
</div>
<br><br>
<button class="btn btn-info col-sm-3 col-sm-offset-6 col-lg-2 col-lg-offset-7"><span class="glyphicon glyphicon-book"></span><a class="text-white" href="index.php?action=openCreateArticle">  Créer un nouveau chapitre</a></button>
<br><br>
<button class="btn btn-info col-sm-3 col-sm-offset-6 col-lg-2 col-lg-offset-7"><span class="glyphicon glyphicon-comment"></span><a class="text-white" href="index.php?action=openNotify"> Commentaires signalés </a></button>
<br><br>
<?php
}
?>


<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
