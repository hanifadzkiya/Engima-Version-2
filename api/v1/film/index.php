<?php
require_once __DIR__.'/../../../Model/Film.php';
$judul_film = $_GET["judul"];
$film = new Film();
$result_film = $film->getByJudul($judul_film);
$arr_film = Array();
$response = Array();
if(mysqli_num_rows($result_film) > 0){
	while($film = $result_film->fetch_assoc()){
		$arr_film[] = $film;
	}
	$response["message"] = "Success get film by title";
	$response["data"] = $arr_film;
	$response["status"] = 200;
} else {
	$response["message"] = "Film not found";
	$response["status"] = 200;
}
http_response_code(200); //Set HTTP Response Code
header('Content-Type: application/json'); 
print(json_encode($response));