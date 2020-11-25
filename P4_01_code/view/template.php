<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Blog_p4: Formation DWJ Openclassromms</title>
        <link href="public/css/style.css" rel="stylesheet" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script  src="https://code.jquery.com/jquery-3.4.1.min.js"  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdn.tiny.cloud/1/6dr3uobmmhrwfmffado0zcm2diovvp3qlrsogcio83js2eam/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>tinymce.init({selector:'textarea'});</script>
    </head>

    <body>

      <header id="header">
      <nav class="navbar navbar-dark bg-dark">
          <button class="btn btn-outline-info text-light" type="button" ><span class="glyphicon glyphicon-home"></span><a href="index.php" class="text-light"> ACCEUIL</a> </button>
          <button class="btn btn-outline-info text-light" type="button" ><span class="glyphicon glyphicon-comment"></span><a href="index.php?action=blog" class="text-light"> BLOG</a> </button>
          <button class="btn btn-outline-info text-light" type="button" ><span class="glyphicon glyphicon-education"></span><a href="index.php?action=about" class="text-light"> A PROPOS</a> </button>
          <button class="btn btn-outline-info text-light" type="button" ><span class="glyphicon glyphicon-user"></span><a href="index.php?action=login" class="text-light"> SE CONNECTER</a> </button>
      </nav>
          <h1 style = "font-family:georgia,garamond,serif;font-size:40px;font-style:italic;">Jean Forteroche</h1>
          <div class="container bg-info">
            <h1 class= " text-light">Un aller simple pour l'Alaska</h1>
          </div><br>
      </header>
      <img class= "imageHeader" src="public\images\header.png" alt="header_img">
        <!-- PHP CONTENT -->
        <?= $content ?>
        <!-- PHP CONTENT -->
        <br><br>
      <footer id="footer" class="p-3 mb-2 bg-dark text-white">
        <h1>Projet 4 - formation Développeur Web Junior - OpenClassrooms - Thibault Brasseur</h1>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </footer>
    </body>
</html>
