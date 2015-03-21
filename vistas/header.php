<?php
/**
 * Created by PhpStorm.
 * User: jesus
 * Date: 10/21/14
 * Time: 4:50 PM
 */
require_once("../Easy/modules/database.php");
require_once("../Easy/modules/get_food.php");

?>
<!DOCTYPE html>
    <html>
        <head>
        	<link rel="shortcut icon" type="image/x-icon" href="../Easy/img/hamburger-icon.png" />
            <link rel="stylesheet" href="../Easy/css/bootstrap.min.css"/>
            <script src="../Easy/js/jquery-2.1.1.min.js"></script>
            <script src="../Easy/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="../Easy/css/style.css"/>
            <script src="../Easy/js/menu.js"></script>
        </head>
   <body style="background-color:#D06503">
       <header role="tablist" id="myTab">
           <div href="#hamburguesas" class="contenedor" id="uno" data-toggle="tab" onclick="changeBackground('D06503')">
               <img class="icon" src="../Easy/img/icono1.png" />
               <p class="texto">Hamburgesas</p>
           </div>

           <div href="#refrescos" class="contenedor" id="dos" data-toggle="tab" onclick="changeBackground('B80000')">
               <img class="icon" src="../Easy/img/icono2.png">
               <p class="texto">Refrescos</p>
           </div>

           <div href="#papas" class="contenedor" id="tres" data-toggle="tab" onclick="changeBackground('A3A300')">
               <img class="icon" src="../Easy/img/icono3.png">
               <p class="texto">Papas Fritas</p>
           </div>

           <div href="#postres" class="contenedor" id="cuatro" data-toggle="tab" onclick="changeBackground('4B0082')">
               <img class="icon" src="../Easy/img/icono4.png">
               <p class="texto">Postres</p>
           </div>

           <div href="#combos" class="contenedor" id="cinco" data-toggle="tab" onclick="changeBackground('088A08')">
               <img class="icon" src="../Easy/img/icono5.png">
               <p class="texto">Combos</p>
           </div>




           <script>
               $(function () {
                   $('#myTab a:last').tab('show')
               })
           </script>
    </header>