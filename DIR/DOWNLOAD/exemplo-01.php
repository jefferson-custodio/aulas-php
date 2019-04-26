<?php
$link = "https://lh3.googleusercontent.com/TPphX_m_gDLytB6WdDFTGeoVvFwB1Owq12Ux7SxFu-nTLLnRhspbP03n0tnkVv74XsFvvbM=s143";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen("carro.jpg", "w+");// no lugar de $basename pode ir qualquer outro nome para o arquivo

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>" alt="">