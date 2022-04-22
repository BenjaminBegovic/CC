<?php

class File{
    public $file;
    public function __construct(){
        $this->file = $file;
    }
    public function get($decode){
        if(file_exists($this-$file)){
         $result = file_get_contents($this->file);
         if($decode){
             $result = json_decode($result, true);
         }

        }else{
            $result = array();
        }
        return $result;
    }
    public function set($content, $encode = true, $decode = true){
        if(file_exists($this->file)){
            $result = file_get_contents($this->file);
            if($decode){
                $result = json_decode($result, true);
            }
            
        }else{
            $result = array();
        }
        if(isset($content["username"]) && isset($content["password"])){
        if(!empty($content["username"]) && !empty($content["password"])){

            $username = $content["username"];
            $password = $content["password"];

            $result[] = array("username" => $username, "password" => $password);

            if($encode){
                $result = json_encode($result);
            }
            if(file_put_contents($this->file, $result)){
                
            }
        }
        }
    }

}