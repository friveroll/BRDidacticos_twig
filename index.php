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

$twig->addExtension(new SlugifyExtension(Slugify::create()));
$twig->addExtension(new Twig_Extension_Debug());

switch ($uri) {
    // The Homepage! (/)
    case '/':
        echo $twig->render('homepage.twig');

        break;

    case '/contact':
        echo $twig->render('contact.twig', array(
            'pageData' => array(
                'title' => 'Find us in the south pole!',
            )
        ));
        break;

    // All other pages
    default:
        // if we have anything else, render the URL + .twig (e.g. /about -> about.twig)
        $template = substr($uri, 1).'.twig';

        echo $twig->render($template, array(
            'title' => 'Some random page!',
        ));
}