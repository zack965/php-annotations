<?php

use Zack\PhpAnnotation\User;
use Zack\PhpAnnotation\Validator;

require "vendor/autoload.php";


$user = new User();
$validator = new Validator();

$user->setEmail('');
$validator->validate($user);
