<?php 


$lastname = ($_POST['lastname']);
$firstname =($_POST['firstname']);
$email =($_POST['email']);
$password =($_POST['password']);


if(empty($lastname)||empty($firstname)||empty($email)||empty($password)){
    header("location:register.php?error=empty");
    exit;
}

if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
    header("location:register.php?error=empty");
    exit ;
}
$lastname= htmlspecialchars($lastname);
$firstname =htmlspecialchars($firstname);
$password = htmlspecialchars($password);
$email =htmlspecialchars($email);



echo "Données valides ✔️";









