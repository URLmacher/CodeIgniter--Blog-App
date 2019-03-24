<div class="jumbotron">
  <h1 class="display-3"><?=$title ?></h1>
</div>
<section class="posts">
  <?php foreach($posts as $post) :?>
  <div class="card text-white bg-secondary mb-3" style="max-width: 30rem; display:block;">
    <div class="card-header">
      <?php echo $post['title']; ?> 
      <div class=" btn-outline-primary ">posted in <?php echo $post['name']; ?></div> 
      <h4 class=" post-date"><small>Hergerichtet am: <?php echo $post['created_at'] ?></small></h4>
    </div>
    <div class='col-md-3'>
      <img class='imager' src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" >
    </div>
    <div class='col-md-9'>
      <div class="card-body">
        <p class="card-text"><?php echo word_limiter($post['body'],50); ?></p>
        <br/>
        <p>
          <a class='btn btn-primary' href="<?php echo base_url().'/posts/'.$post['slug']; ?>">Mehr davon</a>
        </p>
      </div>
    </div>
  </div>
  <?php endforeach; ?> 
  <div class='pagination-links'>
    <?php echo $this->pagination->create_links() ?>
  </div>
</section>