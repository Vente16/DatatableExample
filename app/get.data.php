<?php 
    
    $host = "localhost";  // <--- Servidor
    $dbname = "testing"; // <-- Base de datos
    $user = "root"; // <-- Usuario para acceder a base de datos
    $pass = ""; // Constraseña para acceder a base de datos
   
   
    $con = new PDO("mysql:host=$host; dbname=$dbname; charset-utf8;", $user, $pass);
	$con->exec("set names utf8");

	$sql = "SELECT * FROM usuarios";
	$query = $con->prepare($sql);
    $query->execute();

    $json = array();
       
    foreach ($query as $user) {
     	$json[] = $user;
    }


    $results = array(
    	"sEcho" => 1,
        "iTotalRecords" => 0,
        "iTotalDisplayRecords" => 0,
        "aaData" => []
    );

	if( count( $json ) > 0 ){
		$info =  $json;
		$results = array(
		   "sEcho" => 1,
		   "iTotalRecords" => count($info),
		   "iTotalDisplayRecords" => count($info),
		   "aaData"=> $info
	    );

	}

	echo json_encode($results);







 ?>