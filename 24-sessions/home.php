<?php
session_start();

$_SESSION['cor'] = 'Verde';
$_SESSION['carro'] = 'Audi';

echo "A cor do " . $_SESSION['carro'] . " é " . $_SESSION['cor'];