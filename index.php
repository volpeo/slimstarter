<?php
	require 'vendor/autoload.php';
  
  require 'models/Book.php';

  // Slim initiatilisation
  $app = new \Slim\Slim();

  // views initiatilisation
  $view = $app->view();
  $view->setTemplatesDirectory('views');

  // GET /
  $app->get('/', function() use ($app) {
    $books = Book::all();
    $app->render( 
      'books/index.php', 
      array( "books" => $books) 
    );
  });

  // GET /books/:book_id
  $app->get('/books/:book_id', function ($book_id) use ($app) {
    $book = Book::getBook($book_id);
    $app->render(
      'books/show.php', 
      array("book" => $book)
    );
  });
  $app->run();