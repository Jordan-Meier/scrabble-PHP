<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->get("/scrabble_score", function() use ($app) {
        $my_Scrabble = new Scrabble;
        $scrabble_score = $my_Scrabble->findScore($_GET['word']);
        return $app['twig']->render('index.html.twig', array('score' => $scrabble_score));
    });
    return $app;
?>
