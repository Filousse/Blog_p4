<?php

require_once('model/backend/UserManager.php');

// FORM LOGIN PAGE
function login(){
          require('view/backend/LoginView.php');
}
// SESSION PAGE CONTROL
try{


function openAdmin($user, $password) {
          $loginManager = new \OpenClassrooms\Blog\Model\LoginManager();
          $data = $loginManager->getUser($user);
          if (!empty($_POST['UName']) && !empty($_POST['Password'])) {

                    if ($data['pseudo'] === $_POST['UName']) {


                          if (password_verify($password, $data['password'])) {
                            $postsAdminManager = new \OpenClassrooms\Blog\Model\AdminManager();
                            $postsArray = $postsAdminManager->readArticles();
                            // DASHBOARD ADMIN SECURITY
                            $_SESSION['userName'] = $data['pseudo'];
                            $_SESSION['Password'] = $data['password'];

                            require('view/backend/adminView.php');
                          } else {
                            throw new Exception('Mot de passe incorrect');
                          }
                    } else {
                         throw new Exception('Votre pseudo est incorrect');
                    }
          } else {
            throw new Exception("Veuillez remplir tous les champs!");

          }
}
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/frontend/errorView.php');
}
// LOGOUT
function openingLogout(){
          require('view/backend/logoutView.php');
}
