<?php
namespace OpenClassrooms\Blog\Model;
require_once("model/Manager.php");

class PostManager extends Manager {

// ======================== ARTICLE FRONTENT REQUEST ===========================

// LAST POST
    public function getLastPost() {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM articles ORDER BY date_creation DESC LIMIT 0, 1');

        return $req;
    }
// ID POST SELECTED
    public function getPost($postId) {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM articles WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

// TITLES ARTICLES LIST
    public function getBlogPosts() {
    $db = $this->dbConnect();
    $req = $db->query('SELECT id, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM articles ORDER BY date_creation ');

    return $req;
    }

}
