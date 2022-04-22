<?php
class Session{
    if(isset($_SESSION)){
        session_start();
    }

public function set($key){
    if(isset($_SESSION[$key])){
        return $_SESSION[$key];
    }
    return false;
}
public function get($key, $value){
    if(isset($_SESSION[$key] = $value)){
        return true;
    }
    return false;
}
public function edit(){
    return $this->set($key, $value);
}
public function destory(){
    unset($_SESSION[$key]);
    if(!isset($_SESSION[$key])){
        return true;
    }
    return false;
    }
}
public function delete(){
    session_destory();
}
}




?>