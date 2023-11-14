<?php 
    require_once './database.php';
    $destinations=[];

    if(isset($_SERVER['CONTENT_TYPE'])){
        $contentType =$_SERVER['CONTENT_TYPE'];
        if( $contentType== "application/json"){
            $content= trim(file_get_contents("php://input"));
            $decode=json_decode($content,true);
            $reponse="server response";
            if($decode['language']=="AR"){
                $item = $database->select("tb_dish",[
                    "tb_dish.namel_ar",
                    "tb_dish.description_ar",
                ],[
                    "id_dish"=>$decode['id_dish']
                ]);
                $destinations['name']=$item[0]['namel_ar'];
                $destinations['description']=$item[0]['description_ar'];

            }else{
                $item = $database->select("tb_dish",[
                    "tb_dish.namel",
                    "tb_dish.description",
                ],[
                    "id_dish"=>$decode['id_dish']
                ]);
                $destinations['name']=$item[0]['namel'];
                $destinations['description']=$item[0]['description'];
            }
            
            echo json_encode($destinations);
        }

    }
?>