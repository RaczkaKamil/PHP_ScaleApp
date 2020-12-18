<?php

$controller = new magazine_controller;
$request = filter_var($_GET['request'], FILTER_SANITIZE_STRING);
if ($request == "getData") {
    $controller -> downloadData();
}else if($request == "postData"){
     $controller -> postDatatoDatabase();
}
   

class magazine_controller {
    function postDatatoDatabase(){
          require_once 'sql_connection.php';
          $mysqli = sqlConnect();
    $name = filter_var($_GET['name'], FILTER_SANITIZE_STRING);
    $weight = filter_var($_GET['weiht'], FILTER_SANITIZE_NUMBER_INT);
    
    $z = $mysqli->query("INSERT INTO `product` (`product_name`, `product_weight`) VALUES ('$name','$weight')");
        $mysqli->more_results();
        
        if($z){
             echo '200';
        }else{
             echo '102';
        }
   }
   
   function downloadData(){
       header('Content-Type: application/json');
     require_once 'sql_connection.php';
      $mysqli = sqlConnect();
        $z = $mysqli->query("SELECT * FROM `product`");
    while ($response[] = $z->fetch_assoc()) {
        
    }
    $mysqli->more_results();
    array_pop($response);
    echo json_encode($response);
   }
    
}