<?php

require_once('model/frontend/ArticlesManager.php');
require_once('model/frontend/CommentsManager.php');

// OPENING BLOG PAGE WITH CHAPITRE LIST
function addBlogPosts() {
          $postManager = new \OpenClassrooms\Blog\Model\PostManager();
          $posts = $postManager->getBlogPosts();

          require('view/frontend/blogView.php');
}
// OPENING POST PAGE WITH COMMENT SYSTEME
function addPost() {
          $postManager = new \OpenClassrooms\Blog\Model\PostManager();
          $post = $postManager->getPost($_GET['id']);
          $commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
          $comments = $commentManager->getComments($_GET['id']);

            require('view/frontend/postView.php');
}
// ADD NEW COMMENT
function addComment($postId, $author, $comment) {
          $commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
          $affectedLines = $commentManager->postComment($postId, $author, $comment);

          header('Location: index.php?action=post&id=' . $postId);
}
// NOTIFY BUTTON SENDING FOR ADMIN
function postCommentNotify($id, $postId){
          $commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
          $notify = $commentManager->postNotify($id);

          header('Location: index.php?action=post&id=' . $postId);
}
