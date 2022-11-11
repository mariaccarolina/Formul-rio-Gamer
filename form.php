<?php

$login = $_GET['login'];
$senha = $_GET['senha'];
$acesso = "não tem acesso";

if($login == "maria" && $senha == "1234")
    $acesso = "tem acesso";

echo $acesso;

?>;