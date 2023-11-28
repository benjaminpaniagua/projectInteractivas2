<?php
    require_once './database.php';
    
    if(isset($_SERVER["CONTENT_TYPE"])){
        $contentType = $_SERVER["CONTENT_TYPE"];

        if($contentType === "application/json"){
            $content = trim(file_get_contents("php://input"));

            $decoded = json_decode($content, true);
            if($decoded["category"]==5){
                $items = $database->select("tb_dish","*",[
                    'AND'=>[
                        "popular" => 'y',
                        "visible"=>1
                    ]
                ]
            );

            }else{
                $items = $database->select("tb_dish","*",[
                    'AND'=>[
                        "id_category" => $decoded["category"],
                        "visible"=>1
                    ]
                ]
            );

            }

            
            echo json_encode($items);
        }
    }
?>