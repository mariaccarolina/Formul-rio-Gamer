<?php

$login = $_POST['login'];
$senha = $_POST['senha'];
$acesso = "não tem acesso";

if($login == "maria" && $senha == "1234")
    $acesso = "tem acesso";

echo $acesso;

?>