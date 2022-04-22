<?php
class Singup extends Dbh{
    public function setUser($uid, $pwd, $email){
            $stmt = $this->connect()->prepare('INSERT INTO users(users_uid, users_pwd, users_email) VALUES(?,?,?);');
            $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
            if(!$stmt->execute(array($uid, $email))){
                $stmt = null;
                header("Index.php?message=Error stmt failed");
                exit();
            }
            if(!$stmt->execute(array($uid, $hashedpwd, $email))){
                $stmt = null;
                header("Location: .../index.php?message=Error failed stmt");
            exit();
        }
            $resultChack;
            if($stmt->rowCount() > 0){
                $resultCheck = false;
            }else{
                $resultChack = true;
            }
            return $resultChack;
            
            }
      
    

 public function chackUser($uid, $email){
   $stmt = $this->connect()->prepare("SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;");
   if(!$stmt->execute(array($uid, $email))){
     $stmt = null;
     header("Location: .../index.php?message=stmtFiled");
     exit();
   }
   $resultCheck;
   if($stmt->rowCount() > 0){
    $resultCheck = false;
   }else{
       $resultChack = true;
   }
   return $resultChack;
 }

}