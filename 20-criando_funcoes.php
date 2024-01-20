<?php
// Criando funções 

function exbirNome($nome){
  echo "Meu nome é $nome";
}

exbirNome("Matheus");

echo "<hr>";

function calculcarMedia($nome, $n1, $n2, $n3, $n4){
  $media = ($n1 + $n2 + $n3 + $n4) / 4 ;
     if($media >= 7):
      echo "O/A aluno/a $nome está Aprovado/a com a média de $media";
     else:
      echo "O/A aluno/a $nome está Reprovado/a com a média de $media";
     endif;
}

calculcarMedia("Laúra", 7 , 8 , 6 , 7);