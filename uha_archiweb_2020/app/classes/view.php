<?php
class View {
    private $vars;
    public function construct(){}
    public function render($viewname,$param){
        if (isset($this->vars)){
            extract($this->vars);
        }
        echo '<!doctype html>';
        echo '<html lang="fr">';
        echo '<head>';
        include VIEWS.DS.'common'.DS.'head.php';
        echo '</head>';
        echo '<body>';
        //extract($param);
        include VIEWS.DS.'common'.DS.'nav.php';
        include VIEWS.DS.'home_'.strtolower($viewname).'.php';
        include VIEWS.DS.'common'.DS.'bs_js.php';
        echo '<body>';
    }
    public function setVar($key, $value = null){
        if (is_array($key)){
            $this->vars = $key;
        } else {
            $this->vars[$key] = $value;
        }
    }
}
?>