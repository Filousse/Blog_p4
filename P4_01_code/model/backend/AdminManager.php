<?php
namespace OpenClassrooms\Blog\Model;
require_once("model/Manager.php");

class AdminManager extends Manager {
// ====================== ADMIN CRUD ==========================================

// CREATE
    function createArticle($title, $content) {
      $db = $this->dbConnect();
      $newArticles = $db->prepare('INSERT INTO articles( title, content, date_creation) VALUES(?, ?, NOW())');
      $affectedLines = $newArticles->execute(array( $title, $content));

      return $affectedLines;
    }

// READ
    public function readArticles() {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title,  content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM articles  ORDER BY date_creation DESC LIMIT 0, 100000');

        return $req;
    }

// UPDATE
    function updateArticle($id, $title, $content) {
        $db = $this->dbConnect();
        $newArticles = $db->prepare('UPDATE articles SET title=?, content=? WHERE id= '.$id.'');
        $updateLines = $newArticles->execute(array($title, $content));

        return $updateLines;
    }

// DELETE
    public function deleteArticle($id) {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM articles WHERE id='.$id.' LIMIT 1');
        $req->execute(array($id));

        return $req;
    }

// ====================== DELETE COMMENT =======================================

    public function deleteComment($id) {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM comments WHERE id='.$id.' LIMIT 1');
        $req->execute(array($id));

        return $req;
    }

}
