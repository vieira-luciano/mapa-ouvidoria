<?php
	$datahora = new \DateTime();
	$datahora_string = $datahora->format('Y');
	var_dump($datahora_string);

	$dataAtual = new DateTime('2021-01-01');
$anoAtual = (int) $dataAtual->format('Y');

echo "Ano Atual: " . $anoAtual . "<br>";

$one_day = new DateInterval('P1D');

$dataAnterior = new DateTime();
$dataAnterior->sub($one_day);
$anoAnterior = (int) $dataAnterior->format('Y');

echo "Ano Anterior: " . $anoAnterior . "<br>";

if ($anoAnterior !== $anoAtual /** && não existe registro no ano atual */) {
    /** Inicie o contador */
} else {
    /** Incremente o contador */
}

select *
  from (SELECT CAST(SUBSTRING_INDEX(protocolo, '/', 1) AS integer) as id,
               cast(SUBSTRING_INDEX(protocolo, '/', -1) as integer) as ano
          FROM `ouvidoria`) tb
 order by tb.ano desc, tb.id desc
 limit 1