<?php
/**
 * Created by PhpStorm.
 * User: Lucas Jacinto
 * Date: 7/11/2017
 * Time: 12:40 AM
 */

require_once "Criatura.php";

class Monstro extends Criatura
{
    /**
     * Monstro constructor.
     */
    public function __construct($nome, $classe, $nivel, $vida, $magia, $forca, $agilidade, $destreza, $inteligencia, $carisma){
        $this->nome = $nome;
        $this->classe = $classe;
        $this->nivel = $nivel;
        $this->vida = $vida;
        $this->magia = $magia;
        $this->forca = $forca;
        $this->agilidade = $agilidade;
        $this->destreza = $destreza;
        $this->inteligencia = $inteligencia;
        $this->carisma = $carisma;
    }

    public function descansar(){
        $coeficiente = ($this->vida + $this->nivel) * mt_rand(1, 6);
        if ($coeficiente > 100)
            $coeficiente = 100;

        return $coeficiente;
    }

}