<?php


class AltaRepartidorControllers{
    
    public function render(){
        include_once('views/altaRepartidores.php');
        }
    }


    /*private $clienteModel;

    public function __construct($clienteModel) {
        $this->clienteModel = $clienteModel;
    }

    public function agregarCliente($datosCliente) {
        // Validar datos del formulario antes de enviar al modelo
        $this->clienteModel->agregarCliente($datosCliente);
    }

    public function mostrarClientes() {
        // Obtener clientes del modelo y pasarlos a la vista
        $clientes = $this->clienteModel->obtenerClientes();
        include 'vistaClientes.php';
    } */


?>