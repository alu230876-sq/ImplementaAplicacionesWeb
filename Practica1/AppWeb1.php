<?php
//Programa para definir mensajes de bienvenida
//Creado por Ruby Alexa Mata Granillo
// Fecha: 09/Septiembre/ 2025
//appweb1.php

class texto
{
    public $texto1="Bienvenidos a Programacion de App Web";
    public function imprimirtexto()
    {
        echo $this-> texto1;
        print $this-> texto1;
    }

}
$obj1=new texto;
$obj1->imprimirtexto();
?>