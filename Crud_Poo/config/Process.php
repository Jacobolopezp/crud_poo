<?php

 
include_once('DatabaseProces.php');
$user = $_POST['email_admin'];
$pass = $_POST['pass_admin'];



//instanciar el objeto
$users = new DatabaseProcess();
// llamado función de loguin
$users->login($user,$pass);

$response = $users->login($user,$pass);

 echo $response; 

 if ($response==="verdadero") {
    header("Location: ../index.php"); 
 }

 else{
    echo '<script language="javascript">alert("Error En Datos");</script>';
 }

//print_r($response); 

/* $users->getAll();

$usu = $users->getAll();

print_r($usu); */


