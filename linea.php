<?php
require_once 'modelos/demostracion.php';
require_once 'modelos/linea.php';
require_once 'modelos/tasa.php';
require_once 'modelos/responseLinea.php';

header('Content-Type: application/json');

$d = new Demostracion();
$d->Codigo='1';
$d->Descripcion='DNI';

$t = new Tasa();
$t->PlazoDesde=0;
$t->PlazoHasta=48;
$t->Temp=4.7671;
$t->Tna=58;
$t->ListTasaScore=null;

$l = new Linea();
$l->Id=222;
$l->Codigo="752";
$l->Tope=250000;
$l->Demostracion=$d;
$l->Tasa=$t;

$res = new ResponseLinea();
$res->ContieneError= false;
$res->Mensaje=null;
$res->Linea [] =$l;

echo json_encode($res);