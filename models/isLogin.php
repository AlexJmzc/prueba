<?php


            session_start();
            

            $perfil;
            $estado = false;

            if(isset($_SESSION['nom'])){
                $estado = true;
                $perfil = $_SESSION['perfil'];
            }
    