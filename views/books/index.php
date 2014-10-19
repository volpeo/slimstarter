<h1>Book listing</h1>
<ul>
  <?php foreach ($this->data['books'] as $book): ?>
    <li>
      <a href="/books/<?php echo $book['id'] ?>">
        <?php echo $book['title'] ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>