<?php

namespace Core\Provider\View;

use Core\Provider\AbstractProvider;
use Core\Worker\Template\View;

class Provider extends AbstractProvider {
  
  public $workerName = 'view';

  public function init() {
    $worker = new View();

    $this->di->set($this->workerName, $worker);
  }
}
