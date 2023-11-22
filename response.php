<?php
    require_once './database.php';
    
    if(isset($_SERVER["CONTENT_TYPE"])){
        $contentType = $_SERVER["CONTENT_TYPE"];

        if($contentType === "application/json"){
            $content = trim(file_get_contents("php://input"));

            $decoded = json_decode($content, true);
            if($decoded["category"]==5){
                $items = $database->select("tb_dish","*",[
                    "popular" => 'y'
                ]
            );

            }else{
                $items = $database->select("tb_dish","*",[
                    "id_category" => $decoded["category"]
                ]
            );

            }

            
            echo json_encode($items);
        }
    }
?>