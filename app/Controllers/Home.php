<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return $this->blade->run('Proyecto.mensajeBienvenida');
    }

    public function Registro(): string 
    {
        return $this->blade->run('Proyecto.registrarse');
    }

    public function IniciarSesion(): string 
    {
        return $this->blade->run('Proyecto.iniciarSesion');
    }
}
