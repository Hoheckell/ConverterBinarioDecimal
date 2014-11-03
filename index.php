<?php

/**
* Para este trabalho também é possível usar a função base_convert do php --> http://php.net/manual/en/function.base-convert.php
* Conversão de binário para decimal
*/
function BinaryToDecimal($n){

	$array_n = str_split($n); // quebra o numero binário para dividir os bits e gera um array(vetor)
	$indexes = (count($array_n))-1;//Pega o número de elementos -1
	$c = 0; //gera o número do coeficiente da potenciação
	$num[0] = 0; // inicializa a variável que vai receber o decimal

	while($indexes >=0 ){

		$num[0] += pow(2,$c) * $array_n[$indexes]; // soma parte do calculo para gerar o total em decimal
		$text[]= "(" . $array_n[$indexes] . "*2<sup>" . $c . "</sup>) +"; // variável que vai trazer a explicação do cálculo
		$c++;
		$indexes--;

	}
	$tex = implode(array_reverse($text)); //Inverte a ordem do vertor de saída e o transforma em uma string(texto)
	$tex = substr($tex, 0, -1); // retira o sinal de + do final da string
	$num[1] = $tex . " = "; // insere o sinal = no final da string e registra a string no vetor de retorno
	$num[2] = $n; // registra o numero binário no vetor de retorno
	return $num; // e retorna

}
/**
 * Conversão de Decimal para binário
 */
function DecimalToBinary($d){
	
	while($d > 1){ // Enquanto o número for maior do que 1, continuar
		$rest[] = $d % 2; // adiciona o resto da divisão ao array(vetor que vai retornar)
		$d = $d/2; // divide o valor por dois para que na próxima vez pegue o resto
	}

	return implode(array_reverse($rest)); //Inverte a ordem do vertor de saída e o transforma em uma string(texto) e retorna
	
}

/**
 * Altere os valores abaixo para calcualr números diferentes
 * /
$binary = 101101;
$decimal = 45;

$binario = DecimalToBinary($decimal); //Aplicação da função DecimalToBinary

//SAIDA DO RESULTADO
echo $decimal." em binário é: " . $binario;
echo "<br />---------------------------------------<br />";

$resposta = BinaryToDecimal($binary); //Aplicação da função BinaryToDecimal

//SAIDA DO RESULTADO
echo "O número em Binário ".$resposta[2]. " em decimal é " . $resposta[0] ."<br />";
echo "Fizemos o seguinte cálculo: " . $resposta[1] . $resposta[0];

?>
