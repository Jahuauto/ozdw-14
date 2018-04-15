  <?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$routes->add('books', new Routing\Route('/books/{page}/{test}', array(
    'page' => 1,
    'test' => 'janek',
    '_controller' => 'Books\\Controller\\BooksController::indexAction'
)));
return $routes;
