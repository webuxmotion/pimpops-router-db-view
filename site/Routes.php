<?php

  $this->router->add('home', '/', 'HomeController:index');
  $this->router->add('send-message', '/send_message/(number:any)', 'HomeController:sendMessage');
  $this->router->add('news', '/news', 'HomeController:news');
  $this->router->add('news-one', '/news/(id:int)', 'HomeController:oneNew');

?>
