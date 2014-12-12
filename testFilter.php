<?php

require __DIR__.'/config.php'; 

$di  = new \Anax\DI\CDIFactoryDefault(); 

$di->set('TranslatorController', function() use ($di) { 
    $controller = new Phpmvc\Comment\TranslatorController(); 
    $controller->setDI($di); 
    return $controller; 
}); 

$app = new \Anax\Kernel\CAnax($di); 

$app->session(); 

$app->router->add('', function() use ($app) {
    $app->theme->setTitle("Textfilter");

	
	$app->dispatcher->forward([
        'controller' => 'translator',
        'action'     => 'add', 
		
    ]);
	
	
	
});

$app->router->handle();
$app->theme->render();