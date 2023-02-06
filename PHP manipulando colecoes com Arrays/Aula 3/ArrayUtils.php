<?php

class ArrayUtils
{



    public static function remover(string $elemento, array &$array)
    { {
            var_dump($elemento);
            die();
            $posicao = array_search($elemento, $array, true);
            if (is_int($posicao)) {
                unset($array[$posicao]);
            } else {
                echo "Não foi encontrado no array";
            }
        }
    }
}

?>