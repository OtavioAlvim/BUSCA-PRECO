<?php

namespace App;

class Hello
{
    public function pega_valor($codigo)
    {
        $file = fopen('carga_busca_preco\BUSCA_PREC_GERTEC', 'r');
        $dados = array();

        // Lê o arquivo CSV e armazena os dados
        while (($data = fgetcsv($file, 0, '|')) !== false) {
            $dados[] = $data;
        }

        fclose($file);

        // Pesquisa pelo codigo de barras
        $pesquisa = $codigo;
        $resultados = array();

        foreach ($dados as $linha) {
            if ($linha[0] == $pesquisa) {
                $resultados[] = $linha;
            }
        }
        if(!empty($resultados)){
            return $resultados;
        } else {
            $resultados = 1;
            return $resultados ;
        }
        // return $resultados ;
        // Exibe o resultado da pesquisa
        // if (!empty($resultados)) {
        //     foreach ($resultados as $resultado) {
        //         echo "Nome: " . $resultado[0] . "<br>";
        //         echo "Email: " . $resultado[1] . "<br>";
        //         echo "Telefone: " . $resultado[2] . "<br>";
        //         echo "<br>";
        //     }
        // } else {
        //     echo "Nenhum resultado encontrado.";
        // }
        //echo $bala; // header("Refresh: 0");

    }
}
