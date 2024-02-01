<?php
// Datas
date_default_timezone_set('America/Sao_Paulo');
// echo date('d/m/Y H:i:s');

$date = date('Y-m-d');// DATE
$dateTime = date('Y-m-d H:i:s'); // DATETIME
// echo $dateTime;

// Time
$time = time();
//echo date('d/m/Y', $time);

// MKTIME
$data_pagamento = mktime(15, 30, 00, 01, 31, 2024);
// echo date('d/m/y - h:i', $data_pagamento);

$data = '2019-04-10 13:30:00';
$data = strtotime($data);

echo date('d/m/y H:i', $data);
