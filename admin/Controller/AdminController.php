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

      $sql = $this->qb
        ->select()
        ->from('user')
        ->where('hash', $hash_user)
        ->limit(1)
        ->sql();

      $query = $this->db->query($sql, $this->qb->values);

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
