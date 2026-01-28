<?php
require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__,2) . '/src/models/User.php');

$user = new User(['name' => 'Nael' , 'Email' => 'NaelMorais314@gmail.com.br']);
print_r($user);
echo 'FIM';