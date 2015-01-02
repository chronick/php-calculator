<?php
require dirname(__FILE__) . '/../vendor/autoload.php';

$app = new \Slim\Slim();
$view = $app->view();
$view->setTemplatesDirectory(dirname(__FILE__) . '/templates');

$app->get('/', function () use ($app) {
  $app->render('main.php');
});

$app->post('/expressions', function() use ($app) {
  echo json_encode($app->request->params());
});

$app->run();
