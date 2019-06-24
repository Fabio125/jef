<?php
include("../clases/Usuario.php");
include("../clases/Cliente.php");
include("../controladores/CCliente.php");

session_start();

$usuario = $_SESSION["usuario"];
$razonsocial = $_POST["nombre"];
$documento = $_POST["documento"];
$direccion = $_POST["direccion"];
$arreglo = null;
$cliente = null;
$ccliente = new CCliente();
$id = -1;


switch (strlen($documento)) {

    case 8:
        $cliente = new Cliente(null, $razonsocial, $documento, $razonsocial, null, $direccion);
        break;
    case 11:
        $cliente = new Cliente(null, $razonsocial, null, $razonsocial, $documento, $direccion);
        break;
}

$idcliente = $ccliente->registrar_cliente($cliente, $usuario);
if ($idcliente > 0) {
    $cliente = $ccliente->buscar_clientexndocumento($documento);
    $arreglo = array();
    $arreglo[] = [
        "codcliente" => $cliente->getIdcliente(),
        "nombre" => $cliente->getNombre(),
        "dni" => $cliente->getDni(),
        "razonsocial" => $cliente->getRazonsocial(),
        "ruc" => $cliente->getRuc(),
        "direccion" => $cliente->getDireccionlegal()
    ];
}

echo json_encode($arreglo);
