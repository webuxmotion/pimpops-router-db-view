<?php

namespace Core\Worker\Auth;

use Core\Helper\Cookie;
use Core\Worker\Auth\AuthInterface;

class Auth implements AuthInterface {

  protected $authorized = false;
  protected $hash_user;

  public function authorized() {
    return $this->authorized;
  }

  public function hashUser() {
    return Cookie::get('auth_user');
  }

  public function authorize($user) {
    Cookie::set('auth_authorized', true);
    Cookie::set('auth_user', $user);
  }

  public function unAuthorize() {
    Cookie::delete('auth_authorized');
    Cookie::delete('auth_user');
  }

  public static function salt() {
    return (string) rand(1000000, 9999999);
  }

  public static function encryptPassword($password, $salt = '') {
    return hash('sha256', $password . $salt);
  }
}
