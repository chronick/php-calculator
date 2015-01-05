<?php
require dirname(__FILE__) . '/../vendor/autoload.php';
require dirname(__FILE__) . '/../lib/Calculator.php';

$app = new \Slim\Slim();
$view = $app->view();
$view->setTemplatesDirectory(dirname(__FILE__) . '/templates');

$app->get('/', function () use ($app) {
    $app->render('main.php');
});

$app->post('/expressions', function () use ($app) {
    $app->response()->header('Content-Type', 'application/json');

    $expr = $app->request->params('expr');
    $calc = new \headcanon\QuickenCalc\Calculator();

    try {

        $result = $calc->evaluate($expr);
        echo json_encode(array('success' => true, 'result' => $result));

    } catch (Exception $e) {

        echo json_encode(array('success' => false, 'error' => $e->getMessage(), 'expr' => $expr));
    }
});

$app->run();
