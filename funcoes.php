<?php

    function exercicio01($num1, $num2){
         return "A soma é:" .((int)$num1 + (int)$num2);
    } //fim do exercício01

    function subtrair($num1,$num2){
        return "A subtração é:".((int)$num1 - (int)$num2);
    }//fim do método

    function multiplicacao($num1,$num2){
        return "A multiplicação é:".((int)$num1 * (int)$num2);
    }//fim da multiplicação

    function divisao($num1,$num2){
        if($num2 == 0){
            return "Impossível dividir por zero!";
        }else if($num1 < 0|| $num2 < 0){
            return "Imposssivel dividir por número negativo!";
        }else{
            return "A divisão é:".((int)$num1 / (int)$num2);
        }//fim do if
    }//fim do método
    
    function potencia($num1,$num2){
        if($num2 < 0){
            return "Impossivel calcular a potência";
        }else{
            return "A potência é:".pow((int)$num1, (int)$num2);
        }//fim do if
    }//fim da potencia

    function raiz($num1){
        if($num1 < 0){
            return "Impossivel calcular raiz de número negativo!";
        }else{
            return "A raiz é:".sqrt((int)$num1);
        }//fim do if   
    }//fim do método

    //1. Verifique se um ano é bissexto. 

    function bissexto($num1){
        if($num1 % 4 == 0 && $num1 % 100 != 0){
            return "O ano é bissexto!";
        }else{
            return "O ano não é bissexto!";
        }
    }//fim do bissexto

    //2. Verificar se um número está entre 100 e 200
    function verificarNumero($inicio, $fim, $num){
        for($i=$inicio;$i <= $fim;$i++){
            if($i == (int)$num){
                return true;
            }
        }//fim do for
        return false;
    }//fim do método

    //4.leia a idade e verifique se pode votar: >=16 e < 18 facultativo; >= 18 obrigatório;
    function podeVotar($idade){
        if($idade >= 16 && $idade <=18){
            return "Você pode voltar(Voto Facultativo)";
        }else if($idade >= 18){
            return "Você TEM que votar!";
        }else{
            return "Você NÃO PRECISA votar";
        }
    }//fim do método

    //5. Leia um número de 1 a 7 e mostre o dia da semana
    function diaDaSemana($num){
        switch ($num) {
            case 1:
                return "Domingo";
                break;//Encerra o switch
            case 2:
                return "Segunda-Feira";
                break;
            case 3:
                return "Terça-Feira";
                break;
            case 4: 
                return "Quarta-Feira";
                break;
            case 5:
                return "Quinta-Feira";
                break;
            case 6: 
                return "Sexta-Feira";
                break;
            case 7:
                return "Sábado";
                break;
            default:
                return "O número informado não é inválido";
                break;
        }//fim do switch
    }//fim do método

    //6. Verifique se uma senha digitada é valida.
    function validarSenha($senha){
        $senhaBD = 1234;
        if($senhaBD == $senha){
            return "Senha Valida";
        }else{
            return "Digite novamente";
        }
    }//fim do método 


    //7. Leia 2 horários e determine qual é mais tarde.
    function validarHorarios($horario1,$horario2){
        if($horario1 > $horario2){
            return "O primeiro horario é mais tarde";
        }else{
            return "O segundo horario é mais tarde";
        }


    }//fim do método

    //8. Leia 5 números e calcule a média
    function calcularMedia($num1,$num2,$num3,$num4,$num5){
        $soma = 0;
        $soma = $soma+$num1+$num2+$num3+$num4+$num5;
        $media=$soma/5;
        return "A média é: $media";

    }//fim do método


    //9. Leia números até que a soma ultrapasse 100.
    function somarNumeros($num1,$num2,$num3,$num4,$num5){
        $soma = 0;
        $soma = $soma+$num2+$num3+$num4+$num5;
        if($soma>100){
            return "Soma passou de 100!";
        }else{
            return "A soma não ultrapassou 100!";
        }
       
        }//fim do método

    //10. Solicite senhas até que uma válida seja informada
    function acertarSenha($senha){
        $senhaBD = 1234;
        if($senhaBD == $senha){
            return "Senha Valida";
        }else{
            return "Digite novamente";
        }
    }//fim do método 

    //11. Classifique uma pessoa com base na idade: criança, jovem, adulto, idoso
    function classificaoIdade($idade){
        if($idade <= 12){
            return "Criança";
        }else if($idade <=18){
                return "Jovem";
        }else if($idade <=60){
                return "Adulto";
        }else{
             return "Idoso";
        }
    }

    //12. Verifique se um número é par ou ímpar.
    function parImpar($num){
        if($num%2==0){
            return "Par";
        }else{
            return "Impar";
        }
    }

    //13. Leia dois números e exiba o maior deles.
    function lerNumeros($num1,$num2){
        if($num1>$num2){
            return "O primeiro numero é maior";
        }else{
            return "O segundo numero é maior";
        }
    }

    //14.Imprima os números de 1 a 100 com para.
    function imprimirNumeros($inicio,$fim){
        for($i=$inicio;$i <= $fim;$i++){
            echo "<br>".$i;
        }      

        
    }


    //15. Verifique se um número é multiplo de 3 e 5 ao mesmo tempo.
    function multiplos($num){
        if($num%3==0 && $num%5==0){
            return "Multiplo de 3 e 5";
        }else{
            return "Não é multiplo";
        }
    }
        
    //16. Leia três valores e verifique se formam um triangulo. Classifique-os
    function triangulos($num1,$num2,$num3){
        if($num1==$num2 && $num2==$num3 && $num1==$num3){
            return "Triangulo Equilatero";
        }else if($num1<>$num2 && $num2<>$num3 && $num1<>$num3){
            return "Triangulo Escaleno";
        }else{
            return "O Triangulo é Isosceles";
        }
    }

    //17. Leia idades com enquanto ate uma idade negativa ser digitada. Mostre a media
    function lerEnquanto($num1,$num2,$num3,$num4,$num5){
        $soma = 0;
        $soma = $soma+$num1+$num2+$num3+$num4+$num5;
        $media=$soma/5;
        return "A média é: $media";

    }

    //18. Leia 10 valores e calcule a media, mostre os que estão acima dela. 
    function lerValores($num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8,$num9,$num10){
        $soma = 0;
        $soma = $soma+$num1+$num2+$num3+$num4+$num5+$num6+$num7+$num8+$num9+$num10;
        $media=$soma/10;
        if($media > $soma){
            return "A média é: $media";
        }else{
            return "A soma é maior";
        }
        

    }

    //19. Calcule o fatorial de um número com enquanto.
    function fatorial($num){
        $fat = 1;
        $i = 1;
        while($i <= $num){
            $fat = $fat * $i;
            $i++;
        }

        return "O Fatorial de $num é: $fat";
    }

    //20. Receba um número de 1 a 7 e mostre o dia da semana correspondente(use escolha/caso)
    function classificarDia($num){
        switch ($num) {
            case 1:
                return "Domingo";
                break;//Encerra o switch
            case 2:
                return "Segunda-Feira";
                break;
            case 3:
                return "Terça-Feira";
                break;
            case 4: 
                return "Quarta-Feira";
                break;
            case 5:
                return "Quinta-Feira";
                break;
            case 6: 
                return "Sexta-Feira";
                break;
            case 7:
                return "Sábado";
                break;
            default:
                return "O número informado não é inválido";
                break;
        }//fim do switch
    }//fim do método

    //21. Leia um codigo de um produto e informe seu nome e preço.
    function lerPreco($num1,$num2,$num3,$num4,$num5){
        if($num1==1){
            return "Produto 1";
        }else if($num2==2){
            return "Produto 2";
        }else if($num3==3){
            return "Produto 3";
        }else if ($num4==4){
            return "Produto 4";
        }else if($num5==5){
            return "Produto 5";
        }else{
            return "Codigo não encontrado";
        }

    }

    //22. Crie uma matriz de indentidade 4x4.
    function mostrarMatriz($matriz){
        for($linha=0;$linha<=3;$linha++){
            for($coluna=0;$coluna<=3;$coluna++){
                if($linha==$coluna){
                        $matriz[$linha][$coluna] = 1;
                    }else{
                        $matriz[$linha][$coluna]=0;
        
                    }
                
                echo $matriz[$linha][$coluna]." ";
            }
            echo "<br>";
        }   
    }


    //23. Leia 10 numeros inteiros e armazene em um vetor. Mostre os pares.
    function mostrarVetor($vetor){
        foreach($vetor as $valor){
            if($valor % 2 ==0){
                echo "<br>$valor";
            }
        }
    }

    //24. Leia uma matirz 3x3 e imprima sua diagonal principal.
    function lerMatriz($matriz){
        for($linha=0;$linha<=3;$linha++){
            for($coluna=0;$coluna<=3;$coluna++){
                if($linha=$coluna){
                    echo $matriz[$linha][$coluna]."";
                }
                }
           
            }
            echo "<br>";
        }


    //25. Leia uma matriz 4x4 e exiba a maior linha (com maior soma).
    function maiorLinha($matriz){
        $maiorSoma = 0;
        $maiorLinha = 0;
        $soma = 0;
        for($linha=0;$linha<=3;$linha++){
            for($coluna=0;$coluna<=3;$coluna++){
                $soma = $soma + (int)$matriz[$linha][$coluna];
                
                if($linha == 0){
                    $maiorSoma  = $soma;
                    $maiorLinha = $linha;
                }

                if($soma > $maiorSoma){
                    $maiorSoma = $soma;
                    $maiorLinha = $linha;
                }
            }
        }

        for($linha=0;$linha<=3;$linha++){
            for($coluna=0;$coluna<=3;$coluna++){
                echo $matriz[$linha][$coluna]." ";
            }
            echo "<br>";
        }

        return "Maior linha: $maiorLinha";
    }
    

    //26. Crie dois vetores de 10 posições e preencha um com a soma e outro com a multiplicação entre eles.
    function doisVetores($vetor1,$vetor2)
        foreach($vetor1 as $valor1)
        


        
    
    
        
        
      
        





?>