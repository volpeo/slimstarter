<div class="media">
  <div class="media-left">
    <img class="img-thumbnail" src="http://i.imgur.com/Ck1nKbE.jpg" alt="Cover <?php echo $this->data['book']['title'] ?>">
  </div>
  <div class="media-body">
    <h2 class="media-heading"><?php echo $this->data['book']['title'] ?> <small>by <?php echo $this->data['book']['author'] ?></small></h2>

    <?php if ($this->data['book']['remaining'] > 1): ?>
      <p class="alert alert-success">
        <?php echo $this->data['book']['remaining'] ?> copies remaining
      </p>
    <?php elseif ($this->data['book']['remaining'] == 1): ?>
      <p class="alert alert-warning">
        Only one copy remaining !
      </p>
    <?php else: ?>
      <p class="alert alert-danger">
        Warning: no remaining copy !
      </p>
    <?php endif ?>
    <div>
      <?php echo $this->data['book']['description'] ?>
    </div>
  </div>
</div>

<a href="<?php echo $app->urlFor('root')  ?>">< Back</a>