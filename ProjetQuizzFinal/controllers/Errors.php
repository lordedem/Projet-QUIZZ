<?php
class Errors extends Controller{

    public function __construct()
    {
        $this->dirname = "error";
        $this->layout = "layout_connexion";
        $this->views = "404";
        $this->render();
    }

    public function showError($smsError){
           die($smsError);
    }

}