<?php 

require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/Controller.php';

function register(){
    #primeiro passo: aprsentar o form
    $data = ['palavra magica', 'teste', 'oi'];
    Controller::loadView('users/cadastro.html', $data);
}