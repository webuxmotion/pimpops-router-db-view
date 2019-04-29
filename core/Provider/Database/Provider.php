<?php

namespace Core\Provider\Database;

use Core\Provider\AbstractProvider;
use Core\Worker\Database\Connection;

class Provider extends AbstractProvider {
  
  public $workerName = 'db';

  public $config = [
      'host' => 'localhost',
      'db_name' => 'pimpops_router',
      'username' => 'root',
      'password' => '1111',
      'charset' => 'utf8'
    ];

  public function init() {

    $worker = new Connection($this->config);

    $this->di->set($this->workerName, $worker);
  }
}

?>
