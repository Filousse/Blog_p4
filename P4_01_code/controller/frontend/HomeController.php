<?php


require_once('model/frontend/ArticlesManager.php');

// OPEN HOME PAGE AND LAST POST ARTICLE
function addHomePost(){
          $postManager = new \OpenClassrooms\Blog\Model\PostManager();
          $posts = $postManager->getLastPost();

          require('view/frontend/homeView.php');
}
