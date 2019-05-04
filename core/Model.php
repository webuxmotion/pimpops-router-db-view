<?php

namespace Core;

use Core\DI;
use Core\Worker\Database\QueryBuilder;

abstract class Model {

  protected $di;
  protected $db;
  protected $qb;

  public function __construct(DI $di) {
    $this->di = $di;     
    $this->db = $this->di->get('db');
    $this->qb = new QueryBuilder();
  }
}
