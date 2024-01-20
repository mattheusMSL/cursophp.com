<?php
/**
 * Funções para Números 
 * 
 * number_format
 * round 
 * ciel
 * floor
 * rand
 */
$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é R$ $preco";

echo "<hr>";

echo round(3.6);

echo "<hr>";

echo ceil(5.1);

echo "<hr>";

echo floor(9.9);

echo "<hr>";

echo rand(1,20);