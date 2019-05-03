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
      header('Location: /admin/login/');
      exit;
    }
  }

  public function logout() {
    $this->auth->unAuthorize(); 
    header('Location: /admin/login/', true);
    exit;
  }
}
