<?php
require('controller/frontend/BlogController.php');
require('controller/frontend/HomeController.php');
require('controller/backend/AdminController.php');
require('controller/backend/LoginController.php');
require('controller/frontend/AboutController.php');

// =============================================================================
// ============== ALL ACTIONS ROUTER OF WEBSITE ================================
// =============================================================================
try {
    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
// ==================== FRONTEND REQUESTS ======================================
// HOME PAGE
            case 'home':
              addHomePost();
            break;
// BLOG PAGE
            case 'blog':
              addBlogPosts();
            break;
// ABOUT PAGE
            case 'about':
              aboutAuthor();
            break;
// COMMENTS BY CHAPITRE PAGE
            case 'post':
                    if (isset($_GET['id']) && $_GET['id'] >= 0) {
                      addPost();
                    }
                    else {
                      throw new Exception('Aucun identifiant de billet n\'a été envoyé');
                    }
            break;
// ADD COMMENT IN COMMENTS BY CHAPITRE PAGE
            case 'addComment':
              if (isset($_GET['id']) && $_GET['id'] >= 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                  addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                  throw new Exception('Tous les champs ne sont pas remplis !');
                }
              }
              else {
                throw new Exception("Vous n'êtes pas connecté");
              }
            break;
// ==================== LOGIN CONTROL REQUESTS =================================
// LOGIN PAGE
            case 'login':
              login();
            break;
// OPENING ADMIN PAGE TO MAKING PREPARE $_SESSION CONTROL
            case 'admin':
              if (!empty($_POST['UName']) && !empty($_POST['Password'])){
                openAdmin($_POST['UName'], $_POST['Password']);
              }
              else {
                throw new Exception("Vous n'êtes pas connecté");
              }
            break;
// OPENING LOGOUT PAGE AND REDIRECTION TO LOGIN
            case "logout":
              if (isset($_SESSION['userName']) && isset($_SESSION['Password'])) {
                openingLogout();
            }
// ============== FRONTEND REQUESTS => CRUD + ($_SESSION CONTROL) ==============
//  CREATE ARTICLE
            case 'openCreateArticle':
              if (isset($_SESSION['userName']) && isset($_SESSION['Password'])) {
                openingArticleCreate();
              }
              else {
                throw new Exception("Vous n'êtes pas connecté");
              }
            break;
            case 'addArticle':
              if (isset($_SESSION['userName']) && isset($_SESSION['Password'])) {
                creatingArticle( $_POST['title'], $_POST['text']);
              }
              else {
                throw new Exception("Vous n'êtes pas connecté");
              }
              break;
// OPEN DASHBOARD AND READ ARTICLES
            case 'dashboard':
              if (isset($_SESSION['userName']) && isset($_SESSION['Password'])){
                readingArticles();
              }
              else {
                throw new Exception("Vous n'êtes pas connecté");
              }
            break;
// UPDATE ARTICLE
            case 'openupdate':   /* OPEN ARTICLE UPDATE PAGE */
              if (isset($_SESSION['userName']) && isset($_SESSION['Password'])) {
                openArticleUpdate($_GET['id']);
              }
              else {
                throw new Exception("Vous n'êtes pas connecté");
              }
            break;
            case 'update':    /* UPDATE ARTICLE */
              if (isset($_SESSION['userName']) && isset($_SESSION['Password'])) {
                      updatingArticle($_GET['id'], $_POST['Updatetitle'], $_POST['Updatetext']);
              }
              else {
                  throw new Exception("Vous n'êtes pas connecté");
              }
              break;
// DELETE ARTICLE
            case 'delete':
              if (isset($_SESSION['userName']) && isset($_SESSION['Password'])) {
                deletingArticle($_GET['id']);
              }
              else {
                  throw new Exception("Vous n'êtes pas connecté");
              }
            break;
// COMMENT ADMIN PAGE
            case 'comment':     /* OPEN COMMENT ADMIN PAGE */
              if (isset($_SESSION['userName']) && isset($_SESSION['Password'])) {
                openCommentAdmin($_GET['id']);
              }
              else {
                  throw new Exception("Vous n'êtes pas connecté");
              }
            break;
// DELETE COMMENT
            case 'deletecomment':
              if (isset($_SESSION['userName']) && isset($_SESSION['Password'])) {
                deletingComment($_GET['id']);
              }
              else {
                  throw new Exception("Vous n'êtes pas connecté");
              }
            break;
// COMMENT SIGNALER FRONTEND PAGE
            case 'openNotify':
              if (isset($_SESSION['userName']) && isset($_SESSION['Password'])) {
                openNotify();
              }
              else {
                  throw new Exception("Vous n'êtes pas connecté");
              }
            break;
            case 'signaler':     /* OPEN COMMENT ADMIN PAGE */
              if (isset($_GET['id']) && isset($_GET['post_id'])) {
                postCommentNotify($_GET['id'], $_GET['post_id']);
              }
              else {
                  throw new Exception("Il n'y a pas d'id séléctionner");
              }
            break;
          }
    }
// ============= IF NO ACTION => HOME PAGE =====================================
    else {
        addHomePost();
    }
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/frontend/errorView.php');
}
