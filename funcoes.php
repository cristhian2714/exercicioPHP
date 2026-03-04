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
        
        
        
    
    
        
        
      
        





?>