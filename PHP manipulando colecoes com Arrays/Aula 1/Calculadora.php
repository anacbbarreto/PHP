<?php

class Calculadora 
{
   public function calculaMedia(array $notas)
   {
      $quantidadeNotas = sizeof($notas);
      if ($quantidadeNotas > 0){
        $soma = 0;
        for ($i = 0; $i < $quantidadeNotas; $i++) {
             $soma = $soma + $notas[$i];
        }
        $media = ($soma / $quantidadeNotas);
        echo "</p> A média é: $media</p>";
      } else {

        echo "<p>Não foi possível calcular a média</p>";
      }
   }
}

?>