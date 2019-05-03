<?php

namespace Site\Controller;

class HomeController extends SiteController {
 
  public function index() {

    $contactBook = $this->di->get('contactBook');
    $list = $contactBook->setList()->getList();
    $data['list'] = $list;
    $data['name'] = 'Andrii';

    $this->view->render('index', $data);
  }

  public function sendMessage($number) {

    $contactBook = $this->di->get('contactBook');
    $list = $contactBook->setList()->getList();

    $messenger = $this->di->get('messenger');
    $numberExist = 0;

    foreach ($list as $item) {

      if ($item->number === $number) {
        $numberExist = 1;
        break; 
      } 
    }

    echo $numberExist ?
      'Message has been sent to number: ' . $number:
      'Number ' . $number . ' does not exist!';
  }
    
  public function news() {
    echo 'News page';
  }

  public function oneNew($id) {
    echo 'New id: ' . $id;
  }
}
