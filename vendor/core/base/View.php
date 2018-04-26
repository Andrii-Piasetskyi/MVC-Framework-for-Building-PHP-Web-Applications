<?php
namespace vendor\core\base;

class View{
    public $route = [];
    public $view;
    public $layout;
    
    public function __construct($route, $layout = '', $view = '') {
        $this->route = $route;
        $this->layout = $layout ?: LAYOUT;
        $this->view = $view;
    }
    
    public function render(){
        $file_view = APP . "/views/{$this->route['controller']}/{$this->view}.php";
        ob_start();
        if(is_file($file_view)){
            require $file_view;
        }
        else {
            echo"<p>не найден вид <b>$file_view</b></p>";
        }
        $content = ob_get_clean();
        
        $file_layout = APP . "/views/layouts/{$this->layout}.php";
        if (is_file($file_layout)){
            require '$file_layout';
        }
        else {
            echo "не найдено $file_view";
        }
    }
}
