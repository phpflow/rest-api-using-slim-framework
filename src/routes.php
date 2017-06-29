<?php
// Routes

$app->get('/', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("index '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/getrest', function ($request, $response, $args) {
    
   die('jjj');
    // Render index view
    return $this->renderer->render($response, 'get_all.phtml', $args);
});

$app->group('/api', function () use ($app) {
 
    // Version group
    $app->group('/v1', function () use ($app) {
		$app->get('/employees', 'getEmployes');
		$app->get('/employee/{id}', 'getEmployee');
		$app->post('/create', 'addEmployee');
		$app->put('/update/{id}', 'updateEmployee');
		$app->delete('/delete/{id}', 'deleteEmployee');
	});
});
