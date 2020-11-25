<?php
session_start();

require_once('model/backend/AdminManager.php');
require_once('model/frontend/CommentsManager.php');
require_once('model/frontend/ArticlesManager.php');

// ================ ARTICLE ADMIN => CRUD ======================================

// CREATE => Article
function openingArticleCreate(){
          require('view/backend/createArticleView.php');
}
function creatingArticle($title, $content){
          $AdminManager = new \OpenClassrooms\Blog\Model\AdminManager();
          $data = $AdminManager->createArticle( $_POST['title'], $_POST['text']);
          if (!empty($_POST['title']) && !empty($_POST['text'])) {
            require('view/backend/chekingCreateArticleView.php');
          }
          else {
            echo ('Attention le chapitre est vide les champs ne sont pas remplis !');
          }
}
// READ => Article
function readingArticles(){
          $postsAdminManager = new \OpenClassrooms\Blog\Model\AdminManager();
          $postsArray = $postsAdminManager->readArticles();

          require('view/backend/adminView.php');
}

// UPDATE => Article
function openArticleUpdate($id){
          $postManager = new \OpenClassrooms\Blog\Model\PostManager();
          $post = $postManager->getPost($_GET['id']);

          require('view/backend/updateArticleView.php');
}
function updatingArticle($id, $title, $content){
          $AdminManager = new \OpenClassrooms\Blog\Model\AdminManager();
          $newUpdate = $AdminManager->updateArticle($id, $title, $content);
          if (!empty($_POST['Updatetitle']) && !empty($_POST['Updatetext'])) {
            require('view/backend/chekingUpdateArticleView.php');
          }
          else {
            echo ('Attention le chapitre est vide les champs ne sont pas remplis !');
          }
}
// DELETE => Article
function deletingArticle($id){
          $deleteManager = new \OpenClassrooms\Blog\Model\AdminManager();
          $rowDelete = $deleteManager->deleteArticle($id);

          require('view/backend/chekingDeleteArticleView.php');
}

// ============ COMMENTS ADMIN  ================================================

function openCommentAdmin($id){
          $commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
          $comments = $commentManager->getComments($_GET['id']);
          $postManager = new \OpenClassrooms\Blog\Model\PostManager();
          $post = $postManager->getPost($_GET['id']);
          $commentTrue = $comments->fetchAll();
              if(!empty($commentTrue)){
                require('view/backend/deleteCommentView.php');
              } else{
                require('view/backend/infoCommentView.php');

              }
}

function deletingComment($id){
  $AdminManager = new \OpenClassrooms\Blog\Model\AdminManager();
  $newUpdate = $AdminManager->deleteComment($id);

  require('view/backend/chekingDeleteCommentView.php');

}
function openNotify(){
  $commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
  $comments = $commentManager->getAllComments();
  $postManager = new \OpenClassrooms\Blog\Model\PostManager();
  $posts =  $postManager-> getBlogPosts();

  require('view/backend/notifyView.php');
}
