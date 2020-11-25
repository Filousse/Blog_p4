<?php $title = "Login"; ?>
<?php ob_start(); ?>

<h1>Veuillez vous connecter:</h1>
<?php
    if(@$_GET['Invalid']==true)
{
?>
      <div>  <?php echo $_GET['Invalid'] ?>  </div>
<?php
}
?>
<div class="container" style= "max-width: 400px">
  <form action="index.php?action=admin" method="post">
    <label >Pseudo:</label>
    <input class="form-control" type="text" name="UName" placeholder="Entrez votre pseudo" required><br>
    <label >Mot de passe:</label>
    <input class="form-control" type="password" name="Password" placeholder="Entrez votre mot de passe" required><br>
    <button type="submit" class="btn btn-primary">Se connecter</button>
  </form>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
