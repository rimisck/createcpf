<?php 

$a = $_POST['reg_first_name'];
$b = $_POST['reg_last_name'];
$c = $_POST['reg_address'];
$d = $_POST['reg_complement'];
$e = $_POST['reg_born'];
$f = $_POST['reg_id'];
$g = $_POST['reg_id_exped'];
$h = $_POST['reg_org_exped'];
$i = $_POST['reg_region'];
$j = $_POST['reg_cpf'];

try{
    $conn = new PDO('mysql:host=localhost;dbname=cpf', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    $e->getMessage();
    die;
}

$query = $conn->prepare("INSERT INTO users(
first_name,
last_name,
address,
complement,
born,
identity,
id_exped,
org_exped,
region,
cpf
)
VALUES('$a','$b','$c','$d','$e','$f','$g','$h',$i,'$j')
");

$query->execute();

header("location:./");