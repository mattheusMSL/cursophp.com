<?php
/**
 * Expressões regulares
 * Define um padrão a ser usado para preocurar ou substituir palavras ou grupos de palavras.
 * ^inicio da expressão, $ final da expressão - /i - case sensitive 
 * [] conjunto de caracteres 
 * {} ocorrências - ?{0,1} * {0,} + {1,}
 * 
 */

 $string = "contato@gmail.com";
 $padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.)$/i";
 if(preg_match($padrao, $string)):
    echo "Válido";
    echo "<hr>";
    echo $string;
 else:
  echo "Inválido";
  echo "<hr>";
endif;