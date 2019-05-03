<?php

namespace Site\Controller;

class ErrorController extends SiteController {

  public function page404() {
    $this->view->render('page404');
  } 
}
