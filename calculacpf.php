<link rel="stylesheet" href="bootstrap.css">

<?php

/**USER DATA */
$user_data = [
    "first_name" => $_POST["first_name"],
    "last_name" => $_POST["last_name"],
    "address" => $_POST["address"],
    "complement" => $_POST["complement"],
    "born" => $_POST["born"],
    "id" => $_POST["identify"],
    "id_exped" => $_POST["id_dt_exped"],
    "org_exped" => $_POST["org_exped"],
    "region" => $_POST["region"]
];

$d1 = rand(0,9); //random
$d2 = rand(0,9); //random
$d3 = rand(0,9); //random
$d4 = rand(0,9); //random
$d5 = rand(0,9); //random
$d6 = rand(0,9); //random
$d7 = rand(0,9); //random
$d8 = rand(0,9); //random
$d9 = $user_data["region"]; //região 

/* GERANDO o D10 */
$L = $d1*10 + $d2*9 + $d3*8 + $d4*7 + $d5*6 + $d6*5 + $d7*4 + $d8*3 + $d9*2;
$k = $L/11; //quociente
$r = $L%11; //resto $L/11

if($r == 0 || $r == 1){
    
    $d10 = 0;

}else{

    $d10 = 11 - $r;

}

/*GERANDO D11*/
$M = $d2*10 + $d3*9 + $d4*8 + $d5*7 + $d6*6 + $d7*5 + $d8*4 + $d9*3 + $d10*2;
$n = $M/11;
$j = $M%11;

if($j == 0 || $j == 1){
    
    $d11 = 0;

}else{

    $d11 = 11 - $j;

}

$cpf = "{$d1}{$d2}{$d3}.{$d4}{$d5}{$d6}.{$d7}{$d8}{$d9}-{$d10}{$d11}";

?>

<div class="list-group mb-2">
  <a href="#" class="list-group-item list-group-item-action active">
    <?= $user_data['first_name'], " " . $user_data['last_name']?>
  </a>
  <a href="#" class="list-group-item list-group-item-action">Endereço: <?=$user_data['address'], " " . $user_data['complement']?></a>
  <a href="#" class="list-group-item list-group-item-action">Data de Nascimento: <?=$user_data['born']?></a>
  <a href="#" class="list-group-item list-group-item-action">Rg: <?=$user_data['id']?></a>
  <a href="#" class="list-group-item list-group-item-action">Data de Expedição: <?=$user_data['id_exped']?></a>
  <a href="#" class="list-group-item list-group-item-action">Órgão Expedidor: <?=$user_data['org_exped']?></a>
  <a href="#" class="list-group-item list-group-item-action">Região: <?=$user_data['region']?></a>
  <a href="#" class="list-group-item list-group-item-action">C.P.F: <?=$cpf?></a>
</div>
<form method="post" action="finish.php">
<input type="hidden" name="reg_first_name" value="<?=$user_data['first_name']?>">
<input type="hidden" name="reg_last_name" value="<?=$user_data['last_name']?>">    
<input type="hidden" name="reg_address" value="<?=$user_data['address']?>">
<input type="hidden" name="reg_complement" value="<?=$user_data['complement']?>">
<input type="hidden" name="reg_born" value="<?=$user_data['born']?>">
<input type="hidden" name="reg_id" value="<?=$user_data['id']?>">
<input type="hidden" name="reg_id_exped" value="<?=$user_data['id_exped']?>">
<input type="hidden" name="reg_org_exped" value="<?=$user_data['org_exped']?>">
<input type="hidden" name="reg_region" value="<?=$user_data['region']?>">
<input type="hidden" name="reg_cpf" value="<?=$cpf?>">

<div class="form-row m-0 justify-content-center">
    <input type="submit" value="Concluir" class="btn-lg btn-success lead">
</div>

</form>