<?php
namespace src\controllers;

use \core\Controller;

class CoordenadorController extends Controller {

    public function coordenador() {
        $this->renderCoordenador('home', ['nome' => 'Página Principal do Coordenador']);
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}