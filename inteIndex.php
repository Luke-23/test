<?php

require("config.php");

$sql = new Sql();

$myConnect = $sql->connect();

var_dump($myConnect);

$user = new Users("Lars Yngve", "lasse@lasse.se", "lasseLärSigMysql");
$myUser = $user->getUserInfo();

var_dump($myUser);









// $obj = new Users('Bengt', 'bengt@bengt.se','myPassword');
// $user = $obj->getUserInfo();

//var_dump($user);

// $myFile = new Files();

//$myFile->saveNewUser($obj->userName,$obj->email,$obj->password);

// $myFile->saveNewUser($user['userName'], $user['email'], $user['password']);
//echo "<hr>".$myFile->getUser('bengt@bengt.se');

// $userInfo = $myFile->checkUser('bengt@bengt.se', 'myPassword');


