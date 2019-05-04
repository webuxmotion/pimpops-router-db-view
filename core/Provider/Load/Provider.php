<?php

namespace Core\Provider\Load;

use Core\Provider\AbstractProvider;
use Core\Worker\Model\Load; 

class Provider extends AbstractProvider {
  
  public $workerName = 'load';

  public function init() {
    $worker = new Load();

    $this->di->set($this->workerName, $worker);
  }
}
