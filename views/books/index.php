<h2>Book listing</h2>
<ul>
  <?php foreach ($this->data['books'] as $book): ?>
    <li>
      <a href="<?php echo $app->urlFor('book', array('book_id' => $book['id'])) ?>">
        <?php echo $book['title'] ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>