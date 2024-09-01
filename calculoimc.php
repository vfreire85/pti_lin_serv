/* Progama para classificar IMC informado
Versão 1.0
Autor: Victor Freire de Carvalho
Programa criado para a disciplina de Linguagens de Servidor
do curso de Análise e Desenvolvimento de Sistemas da
Faculdade Senac
Data: 01/09/2024 */

<?php
    function faixa_imc($imc) {
        // Esta é a matriz utilizada para arquivar as faixas de IMC
        $array_faixa = [
            [0, 18.5],
            [18.51, 24.9],
            [24.91, 29.9],
            [29.91, 34.9],
            [34.91, 39.9],
            [39.91, 1000000000]
        ];

        for($i = 0; $i < count($array_faixa); ++$i) {
            //A classificação é dada percorrendo a matriz e comparando com os valores mínimo e máximo de cada vetor, utilizando-se funções na biblioteca padrão do próprio PHP
            if($imc >= min($array_faixa[$i]) AND $imc <= max($array_faixa[$i])) {
                //A categoria de peso é dada através de um switch, classificando com o índice de cada vetor dentro da matriz de faixas de IMC
                switch ($i) {
                    case 0:
                        printf("Atenção, seu IMC é %.2f e você está classificado como magreza. \n", $imc);
                        break;
                    case 1:
                        printf("Atenção, seu IMC é %.2f e você está classificado como saudavel. \n", $imc);
                        break;
                    case 2:
                        printf("Atenção, seu IMC é %.2f e você está classificado como sobrepeso. \n", $imc);
                        break;
                    case 3:
                        printf("Atenção, seu IMC é %.2f e você está classificado como obesidade grau 1. \n", $imc);
                        break;
                    case 4:
                        printf("Atenção, seu IMC é %.2f e você está classificado como obesidade grau 2. \n", $imc);
                        break;
                    case 5:
                        printf("Atenção, seu IMC é %.2f e você está classificado como obesidade grau 3. \n", $imc);
                        break;
                }
            }
        }     
    }

    //Casos de teste
    faixa_imc(15.42);
    faixa_imc(19.2);
    faixa_imc(25.21);
    faixa_imc(33.98);
    faixa_imc(38.67);
    faixa_imc(45);
?>
