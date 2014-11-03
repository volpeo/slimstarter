<?php
	require 'vendor/autoload.php';
  
  require 'models/Book.php';

  // Slim initiatilisation
  $app = new \Slim\Slim(array(
    'view' => '\Slim\LayoutView',
    'layout' => 'layouts/main.php'
  ));

  // hook before.router, now $app is accessible in my views
  $app->hook('slim.before.router', function () use ($app) {
    $app->view()->setData('app', $app);
  });

  // views initiatilisation
  $view = $app->view();
  $view->setTemplatesDirectory('views');

  // GET /
  $app->get('/', function() use ($app) {
    $books = Book::all();
    $root_path = $app->urlFor('root');
    $app->render( 
      'books/index.php', 
      array( 
        "books" => $books,
        "root_path" => $root_path
      ) 
    );
  })->name('root');

  // GET /books/:book_id
  $app->get('/books/:book_id', function ($book_id) use ($app) {
    $book = Book::getBook($book_id);
    $app->render(
      'books/show.php', 
      array("book" => $book)
    );
  })->name('book');
  $app->run();