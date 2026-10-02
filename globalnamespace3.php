<?php
class FormBuilder{
  private string $type='text';
  private string $name='';
  private string $placeholder='';

public function setType(string $type){
  $this->type=$type;
  return $this;
}
  public function setName(string $name){
    $this->name=$name;
    return $this;
  }
  public function setPlaceholder(string $placeholder){
    $this->placeholder=$placeholder;
    return $this;
  }
  public function render(){
    return "<input type=\"{$this->type}\"name=\"{$this->name}\"
    placeholder=\"{$this->placeholder}\">";
  }
}
$input=(new FormBuilder())
->setType('email')
->setName('user_email')
->setPlaceholder("Enter your email address")
->render();
echo htmlspecialchars($input);
?>