<?php

require '../bootstrap.php';

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\App;
use App\Controllers\DevController;



//$app = new App;

$app = new App([

    'settings' => [
        'displayErrorDetails' => true,
        'debug'               => true,
        'whoops.editor'       => 'atom',
    ]

]);

$app->get('/', DevController::class . ':index');
$app->get('/desenvolvedor', DevController::class . ':index');
$app->get('/desenvolvedor/detalhe/{id}', DevController::class . ':detalhe');
$app->get('/desenvolvedor/adicionar', DevController::class . ':adicionar');
$app->post('/desenvolvedor', DevController::class . ':salvar');
$app->get('/desenvolvedor/editar/{id}', DevController::class . ':editar');
$app->put('/desenvolvedor/{id}', DevController::class . ':atualizar');
$app->delete('/desenvolvedor/deletar/{id}', DevController::class . ':deletar');

$app->run();
