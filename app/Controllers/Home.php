<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $dato = ['titulo' => 'home'];
        return $this->blade->run('Proyecto.home', $dato);
    }
}
