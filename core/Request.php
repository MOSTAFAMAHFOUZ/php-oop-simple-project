<?php 


class Request{
    
    public function postInput($key){
        return trim(htmlentities(htmlspecialchars($_POST[$key])));
    }
    public function getInput($key){
        return trim(htmlentities(htmlspecialchars($_GET[$key])));
    }
}