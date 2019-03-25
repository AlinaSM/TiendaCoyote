<?php
class ViewController{

    public function loadView( $view , $isAdmin = false){
        $view_path = $isAdmin ? './app/Views/admin/' : './app/Views/pages/' ;

        require_once($view_path .'head.php');
        require_once($view_path . 'header.php');
        require_once($view_path . $view . '.php');
        require_once($view_path . 'footer.php');  
    }

}