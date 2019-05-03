<?php

  $dirName = '/admin';

  $this->router->add('login', $dirName . '/login/', 'LoginController:form');
  $this->router->add('dashboard', $dirName . '/', 'DashboardController:index');

?>
