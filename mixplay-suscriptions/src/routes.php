<?php

use Slim\Http\Request;
use Slim\Http\Response;


// /movies= end point
/*
$app->get('/movies', function (request $request, response $response, array $args){
    return $response->withJson(['status' => 'ok']);
});
*/
$app->get('/movies/{id}', 'MoviesController:show');
// php -S localhost:8888 -t public public/index.php

$app->get('/movies', 'MoviesController:index');

$app->post('/movies/{id}', 'MoviesController:create');

$app->patch('/movies/{id}', 'MoviesController:edit');

$app->delete('/movies/{id}', 'MoviesController:delete');

$app->put('/movies/{id}', 'MoviesController:replace');

$app->get ('/plans', 'PlanControllers');

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
