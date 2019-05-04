<?php

namespace Admin\Model\User;

use Core\Model;

class UserRepository extends Model {

  public function getUsers() {
    $sql = $this->qb
      ->select()
      ->from('user')
      ->orderBy('id', 'DESC')
      ->sql();

    return $this->db->query($sql);
  } 

  public function test() {
    $user = new User(1);
    $user->setEmail('admin@admin.com');
    $user->save();
  }

  public function addUser() {
    $user = new User;
    $user->setEmail('a100@abicity.com');
    $user->setPassword(md5(rand(1, 10)));
    $user->setRole('user');
    $user->setHash('new');
    $user->save();
  }

  public function delete($id) {
    $sql = $this->qb
      ->delete()
      ->from('user')
      ->where('id', $id)
      ->sql();

    return $this->db->query($sql, $this->qb->values);
  }
}
?>
