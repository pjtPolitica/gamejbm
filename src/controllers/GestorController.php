<?php
namespace src\controllers;

use \core\Controller;

class GestorController extends Controller {

    public function gestor() {
        $this->renderGestor('home', ['nome' => 'Página Principal do Gestor']);
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}