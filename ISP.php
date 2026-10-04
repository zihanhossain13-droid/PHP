<?php
interface WorkableInterface{
  public function work();
}
interface FeedableInterface{
  public function eat();
}
class HumanWorker implements WorkableInterface,FeedableInterface{
  public function work(){
    echo "MAN";
  }
  public function eat(){
    echo "MAN";
  }
}
class RobotWorker implements WorkableInterface{
  public function work(){
  echo "ROBOT";
}
}
$humanwork=new HumanWorker();
$humanwork->work();
$humanwork->eat();
$robot=new RobotWorker();
$robot->work();
