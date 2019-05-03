<?php

namespace Site\Controller;

class HomeController extends SiteController {
 
  public function index() {
    $this->view->render('index');
  }

  public function desk($desk) {
    $data = [];
    $data['desk'] = $desk;
    $this->view->render('desk', $data);
  }

  public function item($item) {
    $data = [];
    $data['item'] = $item;
    $this->view->render('item', $data);
  }

  public function newDesk() {
    $this->view->render('new-desk');
  }
}
