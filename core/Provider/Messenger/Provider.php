<?php

namespace Core\Provider\Messenger;

use Core\Provider\AbstractProvider;
use Core\Worker\Messenger\Messenger;

class Provider extends AbstractProvider {
  
  public $workerName = 'messenger';

  public function init() {
    $worker = new Messenger();

    $this->di->set($this->workerName, $worker);
  }
}

?>
