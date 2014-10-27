<?php
/**
 * Created by PhpStorm.
 * User: felipillo
 * Date: 27/10/14
 * Time: 01:18 PM
 */

require 'Menu.php';


// $link=null, $icon=null, $text=null
$items = array(
    new Menu('/', 'icon-home', 'Inicio'),
    new Menu('acerca', 'icon-info-sign', 'Acerca'),
    new Menu('sensores-vernier', 'icon-circle-blank', 'Sensores'),
    new Menu('contacto', 'icon-envelope', 'Contacto'),
);

