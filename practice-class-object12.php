<?php
class User{
    public string $username;
    public string $role;
    public bool $isActive;
    public function __construct($username,$role="Subscriber",$isActive=true){
$this->username=$username;
$this->role=$role;
$this->isActive=$isActive;

    }
    public function getProfile(){
return "User:{$this->username}|Role:{$this->role}|Status:".($this->isActive?"Active":"Inactive");
    }
    
}
$user1=new User("Zihan");
$user2=new User("AdminRana","Admin",false);
echo $user1->getProfile();
echo $user2->getProfile();

?>