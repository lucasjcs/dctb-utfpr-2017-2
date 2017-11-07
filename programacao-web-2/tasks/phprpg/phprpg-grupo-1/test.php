<?php
/**
 * Created by PhpStorm.
 * User: Lucas Jacinto
 * Date: 7/11/2017
 * Time: 1:13 PM
 */

require_once "Confronto.php";

$criatura1= new Monstro("Lucao", "Negro", 8, 100, 100, 50, 90, 90, 100,100);
$criatura2 = new Heroi("Fabricio", "Indiano", 7, 100, 100, 100, 90, 90, 100,100, 10);

Confronto::guerra($criatura1, $criatura2);