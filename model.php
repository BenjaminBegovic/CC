<?php

class Model{
    private $server = "localhost";
    private $username = "root";
    private $password;
    private $db = "oop";
    private $conn;
public function __construct(){
    try{
          $this->conn = new mysqli($this->server,$this->username,$this->password,$this->db);
    }catch(Exception $e){
          echo "connection failed " . $e->getMessage();
    }
}
public function insert(){
   if(isset($_POST["submit"])){
   if(isset($_POST["name"]) 
   && isset($_POST["email"]) 
   && isset($_POST["mobile"]) 
   && isset($_POST["address"])){


    if(!empty($_POST["name"])
     && !empty($_POST["email"]) 
     && !empty($_POST["mobile"]) 
     && !empty($_POST["address"])){

    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    $query = "INSERT INTO record 
    (name,email,mobile,address) 
    VALUES ('$name','
    $email','
    $mobile','
    $address')";

    if($sql = $this->conn->query($query)){
      header("Location:index.php?message=You have successfully filled in the form, your data has been saved in the database");
    }else{
        header("Location:index.php?message=Error");
    }
    }else{
        header("Location:index.php?message=You'r empty failed :(");
    }
   }
   }
}
public function fetch(){
    $data = null;
$query = "SELECT * FROM record";
if($sql = $this->conn->query($query)){
    while($row = mysqli_fetch_assoc($sql)){
      $data[] = $row;
    }
}
return $data;
}

public function delete($id){
  $query = "DELETE FROM record WHERE id = '$id'";
  if($sql = $this->conn->query($query)){
      return true;
  }else{
      return false;
  }
}
public function fetch_single($id){
    $data = null;

 $query = "SELECT * FROM record WHERE id='$id'";
 if($sql = $this->conn->query($query)){
     while($row = $sql->fetch_assoc()){
         $data = $row;
     }
 }
 return $data;
}

public function edit($id){

    $data = null;

    $query = "SELECT * FROM record WHERE id = '$id'";
    if($sql = $this->conn->query($query)){
      while($row = $sql->fetch_assoc()){
          $data = $row;
      }
    }
    return $data;
}
public function update($data){
    $query = "UPDATE record SET name='$data[name]',$data[email]',$data[address]',$data[mobile] WHERE id='$data[id]')";
}
}