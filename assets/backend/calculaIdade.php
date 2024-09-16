<?php 
$dataAtual = new DateTime();
$dataNascimento = new DateTime('2003-09-12');
$idade = $dataAtual->diff($dataNascimento)->y;
?>