<?php

// Router.php
class Router {
    public function route($url) {
        switch ($url) {
            case '/clientes':
                $this->render('cliente.php');
                break;
            case '/repartidores':
                $this->render('repartidor.php');
                break;
            case '/viajes-semanales':
                $this->render('viaje.php');
                break;
            case '/reportes':
                $this->render('reporte.php');
                break;
            default:
                $this->render('404.php'); // Página no encontrada
                break;
        }
    }

    private function render($view) {
        include 'template.php';
    }
}


?>