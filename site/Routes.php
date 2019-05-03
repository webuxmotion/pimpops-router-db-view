<?php

  $this->router->add('home', '/', 'HomeController:index');
  $this->router->add('desk', '/desk/(desk:any)', 'HomeController:desk');
  $this->router->add('item', '/item/(item:any)', 'HomeController:item');
  $this->router->add('new-desk', '/new-desk', 'HomeController:newDesk');

?>
