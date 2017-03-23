<?php
  require_once __DIR__.'/../vendor/autoload.php';
  require_once __DIR__.'/../src/Scabble.php';

  session_start();

  $app = new Silex\Application;
  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

  $app->get("/", function() use ($app) {
    return $app['twig']->render('index.html.twig');
  });
  $app->post("/score", function() use ($app){
    $newScrabble = new Scrabble;
    $score = $_POST['user_input'];
    $prepScore = $newScrabble->prepare($score);
    $result = $newScrabble->addUP($prepScore);
    return $app['twig']->render('index.html.twig', array('jerry' => $result, 'sam' => $score));
  });
  return $app;
 ?>
