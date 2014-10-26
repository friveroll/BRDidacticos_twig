<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Cocur\Slugify\Bridge\Twig\SlugifyExtension;
use Cocur\Slugify\Slugify;

$request = Request::createFromGlobals();
$uri = $request->getPathInfo();
$loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
$twig = new Twig_Environment($loader, array(
    // cache disabled, since this is just a testing project
    'cache' => false,
    'debug' => true,
    'strict_variables' => true
    ));

$twig->addExtension(new Twig_Extension_Debug());


switch ($uri) {
    case '/':
        echo $twig->render('br-index.twig');
        break;

    case '/sensores-vernier':
        echo $twig->render('sensores.twig');
        break;

    case '/sensores/sensor-de-movimiento':
    	echo $twig->render('md-btd.twig');
    	break;

    case '/sensores/contador-de-gotas':
    	echo $twig->render('vdc-btd.twig');
    	break;

    case '/sensores/cromatografo-de-gases-mini-gc-plus':
    	echo $twig->render('gc2-mini.twig');
    	break;

    case 'sensores/espectrofotometro-spectrovis-plus':
    	echo $twig->render('svis.pl.twig');
    	break;

    case '/interfaces/labquest-2':
    	echo $twig->render('labq2.twig');
    	break;

    case '/software/logger-pro':
    	echo $twig->render('lp.twig');
    	break;

    case 'acerca':
    	echo $twig->render('acerca.twig');
    	break;

    case 'contacto':
    	echo $twig->render('contacto.twig');
    	break;

    // All other pages
    // default:
    //     // if we have anything else, render the URL + .twig (e.g. /about -> about.twig)
    //     $template = substr($uri, 1).'.twig';

    //     echo $twig->render($template, array(
    //         'title' => 'Some random page!',
    //     ));
}