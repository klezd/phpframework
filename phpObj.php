<?php
class Animal {
    private $name;
    public function __construct($name) {
        $this->name = $name;
    }
   
    public function getName() {
        return $this->name;
    }
}

class Dog extends Animal {
    private $breed;
    public function __construct($name, $breed) {
        parent::__construct($name);
        $this->breed = $breed;
    }
}

$doge = new Dog("Doge", "shiba inu");
print( $doge->getName() );


interface iTemplate {
    public function setVariable($name, $var);
    public function getHtml($template);
}

class Template implements iTemplate {
    public $vars = array();
  
    public function setVariable($name, $var) {
        $this->vars[$name] = $var;
    }
  
    public function getHtml($template) {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }
        return $template;
    }
}

$templ = new Template();
$templ->setVariable("title", "My web page");
echo $templ->getHtml("<title>{title}</title>");

?>
