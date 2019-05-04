<?php

$dirName = '/admin';

$this->router->add('login', $dirName . '/login/', 'LoginController:form');
$this->router->add('auth-admin', $dirName . '/auth/', 'LoginController:authAdmin', 'POST');
$this->router->add('logout', $dirName . '/logout/', 'AdminController:logout');
$this->router->add('dashboard', $dirName . '/', 'DashboardController:index');
$this->router->add('get-users', $dirName . '/users/', 'DashboardController:users');
