<?php 
// ID da categoria Fiat Brasília 
//========IMPORTANTE ALTERAR QUANDO FOR SUBIR AS OUTRAS LOJAS========
$id_category = '3';
// Função que busca os posts na API.
function get_post() {

$ApiURL = 'https://dados51top.fly.dev/lojas';
$cURLConnection = curl_init();

curl_setopt($cURLConnection, CURLOPT_URL, $ApiURL);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$get_result = curl_exec($cURLConnection);
curl_close($cURLConnection);

$results = json_decode($get_result, true);

return $results;

}
// Variável que recebe o resultado da API.
$get_posts = get_post();



?>