<?php

function mostrarEmitirProforma()
{
    include_once("../Views/CI_emitirProforma.php");
    $emitirProforma = new EmitirProforma();
    $emitirProforma->emitirProformaShow();
}

if (isset($_POST['btnEmitirProforma'])) {
    mostrarEmitirProforma();
} else {
    include_once("../../../Shared/FormularioMensajeSistema.php");
    $mensaje = new FormularioMensajeSistema;
    $mensaje->FormularioMensajeSistema();
    $mensaje->formularioMensajeSistemaShow(0, "Error", "Se ah detectado un acceso no permitido", "../../../index.php");
}
