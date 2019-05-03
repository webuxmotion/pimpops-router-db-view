<?php

namespace Core;

use Core\DI;

abstract class Controller {

  protected $di;
  protected $db;
  protected $view;
  protected $request;

  public function __construct(DI $di) {
    $this->di = $di; 
    $this->view = $this->di->get('view');
    $this->request = $this->di->get('request');
    $this->db = $this->di->get('db');
  }
}
