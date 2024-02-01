<?php
session_start();

echo "O " . $_SESSION['carro'] . " tem a cor " . $_SESSION['cor'] . "e seu id: ". session_id();