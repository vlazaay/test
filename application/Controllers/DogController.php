<?php
namespace application\Controllers;

class DogController{

    public function indexAction(){
            $data = require_once 'application\config\data.php';
            foreach ($data as $dog => $action){
                foreach($action as $k => $v){
                    if($_POST['enterCommand'] === $dog ." ". $k){
                       // echo $_POST['enterCommand'];
                        return $v;
                    }else{

                    }
                }
            }

    }

}