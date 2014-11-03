<?php
  // require composer autoload (load all my libraries)
  require 'vendor/autoload.php';
  
  // require my models
  require 'models/Book.php';

  // Slim initialisation
  $app = new \Slim\Slim(array(
    'view' => '\Slim\LayoutView', // I activate slim layout component
    'layout' => 'layouts/main.php' // I define my main layout
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
  })->name('root'); // named route so I can use with "urlFor" method

  // GET /books/:book_id
  $app->get('/books/:book_id', function ($book_id) use ($app) {
    $book = Book::getBook($book_id);
    $app->render(
      'books/show.php', 
      array("book" => $book)
    );
  })->name('book'); // named route so I can use with "urlFor" method

  // always need to be at the bottom of this file !
  $app->run();