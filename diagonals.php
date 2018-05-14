<?php

//acesso ao canal de recebimento de dados.
$handle = fopen ("php://stdin","r");
//captura da quantidade de linhas e colunas da matriz.
fscanf($handle,"%d",$n);
//lopping resultante da matriz com todos os dados necessários.
for($a_i = 0; $a_i < $n; $a_i++)
  $a[] = explode(" ",fgets($handle));

//zera as variáveis.
$diagA = $diagB = 0;
//efetua a contagem das linhas/culunas da matriz. 
$n = count($a);
//lopping sobre parâmetros da matriz, resultando na soma absoluta das diagonais.
for ($i=0; $i < $n; $i++) {
  $diagA += $a[$i][$i];
  $diagB += $a[$n-1-$i][$i];
}
//soma absoluta das diagonais.
echo abs($diagA - $diagB);

?>
