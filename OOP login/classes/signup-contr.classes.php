<?php

class SignupContr extends SingUp{

   public $uid;
   public $pwd;
   public $pwdrepeat;
   public $email;

   public function __construct($uid, $pwd, $pwdrepeat, $email){
    $this->uid = $uid;
    $this->pwd = $pwd;
    $this->pwdrepeat = $pwdrepeat;
    $this->email = $email;
   }

   public function signupUser(){
       #invalid password
       if($this->invalidUid() == false){
        #invalid username
           header("Location: ../index.php?message=Error invalid username");
        exit();
       }
       if($this->invalidEmail() == false){
           #invalid email
        header("Location: ../index.php?message=Error invalid email");
    exit();
       }
       if($this->pwdMatch() == false){
           #password Match
           header("Location: ../index.php?message=Error password is not match");
        exit();
       }
    if($this->uidTakenCheck() == false){
        #username or email taken!;
        header("Location: ../index.php?error=Username or email taken");
    exit();
    }

    $this->setUser($this->uid, $this->pwd, $this->email);
   }
   public function emptyinput(){
       $result;
       if(!empty($this->uid) || !empty($this->pwd) || empty($this->pwdrepeat) || !empty($this->email))
      {
       $result = false;
      }else{
          $result = true;
      }
      return $result;

   }
   public function invalidUid(){
       $result;
       if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid))
      {
          $result = false;
      }else{
          $result = true;
      }
      return $result;
      
   }
   public function invalidEmail(){
    $result;
    if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
   {
       $result = false;
   }else{
       $result = true;
   }
   return $result;
   
}
public function pwdMatch(){
    $result;
    if(!$this->chackUser($this->uid, $this->email))
   {
       $result = false;
   }else{
       $result = true;
   }
   return $result;
   
}

}