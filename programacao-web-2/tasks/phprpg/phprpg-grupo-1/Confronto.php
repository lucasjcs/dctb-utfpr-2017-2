<?php
/**
 * Created by PhpStorm.
 * User: Lucas Jacinto
 * Date: 7/11/2017
 * Time: 1:27 PM
 */

require_once "model/Heroi.php";
require_once "model/Monstro.php";


class Confronto{
    public static function guerra($monstro, $heroi){
        $flag = 1;

        while ($heroi->vivo() && $monstro->vivo()){
            if ($flag == 1){
                $flag = 2;

                $ataque = $monstro->atacar();
                $defesa = $heroi->defender();
                echo "Monstro atacou Heroi: ";

                echo "<br> <br>";
                //monstro ataque, herou defesa
                if ($ataque > $defesa){
                    $heroi->perdeVida(8);
                    echo "Heroi perdeu vida";
                    echo "<br> Vida do Monstro: ". $monstro->getVida();
                    echo "<br> Vida do Heroi: ". $heroi->getVida();
                    echo "<br> <br>";
                }else{
                    $flag = 1;

                    $ataque =  $heroi->atacar();
                    $defesa = $monstro->defender();
                    echo "Heroi atacou monstro: ";

                    echo "<br> <br>";
                   //heroi ataque, monstro defesa
                    if ($ataque > $defesa){
                        $monstro->perdeVida(8);
                        echo "Monstro perdeu vida.";
                        echo "<br> Vida do Monstro: ". $monstro->getVida();
                        echo "<br> Vida do Heroi: ". $heroi->getVida();
                        echo "<br> <br>";

                    }
                }
            }

        }

        if ($monstro->vivo() && !$heroi->vivo()){
            if ($monstro->descansar() > 20){
                echo "<br>================== <br><br>";
                echo "<br> A criatura ". $monstro->getNome(). "pode descansar";
                $monstro->revitalizar();
            }else{
                echo "<br> A criatura ". $monstro->getNome(). "não pode descansar";
            }
        }else if ($heroi->vivo() && !$monstro->vivo()){
            if ($heroi->descansar() > 20){
                echo "<br>================== <br><br>";
                echo "<br> A criatura ". $heroi->getNome(). "pode descansar";
                $monstro->revitalizar();
            }else{
                echo "<br> A criatura ". $heroi->getNome(). "não pode descansar";
            }
        }

    }

}