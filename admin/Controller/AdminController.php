<?php

namespace Admin\Controller;

use Core\Controller;
use Core\Worker\Auth\Auth;

class AdminController extends Controller {

  protected $auth;

  public function __construct($di) {

    parent::__construct($di);

    $this->auth = new Auth();

    $this->checkAuthorization();
  }

  public function checkAuthorization() {
    if ($this->auth->hashUser() == null) {
      $this->logout();      
    } else {
      $hash_user = $this->auth->hashUser();

      $sql = '
        SELECT *
        FROM `user`
        WHERE hash="' . $hash_user .'"
        LIMIT 1
      ';

      $query = $this->db->query($sql);

      if (!empty($query)) {
        $user = $query[0]; 

        if ($user->role != 'admin') {
          $this->logout();      
        }
      } else {
        $this->logout();      
      }
    }
  }

  public function logout() {
    $this->auth->unAuthorize(); 
    header('Location: /admin/login/', true);
    exit;
  }
}
