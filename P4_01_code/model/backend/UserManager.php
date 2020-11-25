<?php
namespace OpenClassrooms\Blog\Model;
require_once("model/Manager.php");

class LoginManager extends Manager {

// ====================== LOGIN CONTROL ========================================

    public function getUser($pseudo) {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT pseudo, password FROM user WHERE pseudo = ? ');
        $req->execute(array($pseudo));
        $data = $req->fetch();

        return $data;
    }
}
