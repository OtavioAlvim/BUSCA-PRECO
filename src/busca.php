<?php

namespace App;

class busca
{
    public function busca($codigo)
    {
        $file = fopen('C:\Users\otavio\OneDrive\htdocs\avenida\carga_busca_preco\BUSCA_PREC_GERTEC', 'r');
        $dados = array();

        // Lê o arquivo CSV e armazena os dados
        while (($data = fgetcsv($file, 0, '|')) !== false) {
            $dados[] = $data;
        }

        fclose($file);

        // Pesquisa pelo email "maria@example.com"
        $pesquisa = 'BANANINHA KG';
        $resultados = array();

        foreach ($dados as $linha) {
            if ($linha[1] == $pesquisa) {
                $resultados[] = $linha;
            }
        }

        // Exibe o resultado da pesquisa
        if (!empty($resultados)) {
            foreach ($resultados as $resultado) {
                echo "Nome: " . $resultado[0] . "<br>";
                echo "Email: " . $resultado[1] . "<br>";
                echo "Telefone: " . $resultado[2] . "<br>";
                echo "<br>";
            }
        } else {
            echo "Nenhum resultado encontrado.";
        }
    }
}
