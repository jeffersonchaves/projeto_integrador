<?php

class Controller {

    public static function calluseCase(string $funtionName = null){
        
        if (function_exists($funtionName)) {
            call_user_func($funtionName);
        } else {
            header('HTTP/1.1 403 Acesso negado');
            //throw new BadFunctionCallException("Usecase not exists");
        }
    }

    public static function loadView(string $viewPath, $data = null){

        $default_path = __DIR__ . "/../view/";

        if (file_exists($default_path . $viewPath)) {
            require_once $default_path . $viewPath;
        } else {
            throw new InvalidArgumentException("tela nao existe");
        }
    }
}

@Controller::calluseCase($_GET['action']);