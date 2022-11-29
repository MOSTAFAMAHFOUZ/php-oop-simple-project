<?php 


class Response{
    
    public function redirect($path){
        header("location:".URL.$path);
    }
}