<?php
namespace OpenClassrooms\Blog\Model;
require_once("model/Manager.php");

class CommentManager extends Manager {

// ======================== ARTICLE FRONTENT REQUEST ===========================

// CREATE NEW COMMENT
    public function postComment($postId, $author, $comment) {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }
// READ COMMENT
    public function getComments($postId) {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

//  CREATE NOTIFY WITH CLIENT BUTTON
    public function postNotify($id) {
      $db = $this->dbConnect();
      $postNotify = $db->prepare('UPDATE comments SET notify=? WHERE id= '.$id);
      $updateLines = $postNotify->execute(array(1));

      return $updateLines;
    }

// READ ALL NOTIFY IN ADMIN BACKEND CONTROL
    public function getAllComments(){
      $db = $this->dbConnect();
      $allComments = $db->query('SELECT * FROM comments');

      return $allComments;
    }
}
