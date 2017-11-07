<?php
/**
 * Created by PhpStorm.
 * User: Lucas Jacinto
 * Date: 7/11/2017
 * Time: 1:13 PM
 */

require_once "Confronto.php";
require_once "model/CriaCriatura.php";

$criatura1 = criar('Matilda');
$criatura2 = criar('Dark Glorysson');

Confronto::guerra($criatura1, $criatura2);