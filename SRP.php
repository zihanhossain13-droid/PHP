<?php
enum Role:string{
  case ADMIN='admin';
  case EDITOR='editor';
  case SUBSCRIBER='subscriber';
}
class UserProfile{
  public function __construct(
    public readonly int $userId,
    public Role $role
  ){}
  public function getAccessLevel(){
    return match($this->role){
      Role::ADMIN=>"Full Access",
      Role::EDITOR=>"Content Edit Access",
      Role::SUBSCRIBER=>"Read Only Access",
    };
  }
}
$user1=new UserProfile(101,Role::ADMIN);
echo "User 1 Access:" . $user1->getAccessLevel()."<br>";
$user2=new UserProfile(102,Role::EDITOR);
echo "User 2 Access:" . $user2->getAccessLevel();