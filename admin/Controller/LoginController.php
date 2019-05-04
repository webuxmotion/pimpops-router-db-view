<?php

namespace Admin\Controller;

use Core\Controller;
use Core\DI;
use Core\Worker\Auth\Auth;

class LoginController extends Controller {

  protected $auth;

  public function __construct(DI $di) {
    parent::__construct($di);

    $this->auth = new Auth();

    if ($this->auth->hashUser() !== null) {
      header('Location: /admin/');
      exit;
    }
  }

  public function form() {
    $this->view->render('pages/login');
  }

  public function authAdmin() {

    $params = $this->request->post;

    $sql = $this->qb
      ->select()
      ->from('user')
      ->where('email', $params['email'])
      ->where('password', md5($params['password']))
      ->limit(1)
      ->sql();

    $query = $this->db->query($sql, $this->qb->values);

    if (!empty($query)) {
      $user = $query[0]; 

      if ($user->role == 'admin') {
        $hash = md5($user->id . $user->email . $user->password . $this->auth->salt());

        $sql = $this->qb
          ->update('user')
          ->set(['hash' => $hash])
          ->where('id', $user->id)
          ->sql();

        $this->db->execute($sql, $this->qb->values);

        $this->auth->authorize($hash);

        header('Location: /admin/login/');
        exit;
      }
    }

    print_r('Something wrong');
    exit;
  }
}
