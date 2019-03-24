<div class="jumbotron">
  <h1 class="display-3"><?=$title ?></h1>
</div>

<div class="card text-white bg-secondary mb-3 view-card" >
  <div class="card-header"><?php echo $post['title']; ?></div>
  <div class="view-wrapper">
    <div class='left-img'>
      <img class='imager' src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" >
    </div>
    <div class="card-body right-body">
      <h4 class="card-title post-date"><small>Hergerichtet am: <?php echo $post['created_at'] ?></small></h4>
      <p class="card-text"><?php echo $post['body']; ?></p>
      <br/>
    </div>
  </div>
</div>
<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
  <div class="btn-wrapper">
    <a class="btn btn-warning" href="edit/<?php echo $post['slug']; ?>">Edit</a>
    <?php echo form_open('/posts/delete/'.$post['id']); ?>
      <input type='submit' value='Löschen' class='btn btn-danger'>
    </form>
  </div>
<?php endif; ?>
<section class='comments'>
  <h3>Kommentare</h3>
  <?php if($comments) : ?>
    <?php foreach($comments as $comment) :?>
    <blockquote class="blockquote text-right">
      <p class="mb-0">
        <?php echo $comment['body']; ?>
      </p>
      <footer class="blockquote-footer">
        schreibt <cite title="Source Title"><?php echo $comment['name'];?></cite>
      </footer>
    </blockquote>
    <?php endforeach; ?>
  <?php else : ?>
    <p>Keine Kommentare</p>
  <?php endif; ?>
</section>
<hr>
<section class='comment'>
  <h3>Kommentar hinzufügen</h3>
  <?php echo validation_errors(); ?>
  <?php echo form_open('comments/create/'.$post['id']); ?>
    <div class='form-group '>
      <label for='namw'>Name</label>
      <input type="text" name='name' class='form-control' id='namw'>
    </div>
    <div class='form-group'>
      <label for='email'>Email</label>
      <input type="text" name='email' class='form-control' id='email'>
    </div>
    <div class='form-group'>
      <label for='text'>Kommentar</label>
      <textarea name='body' class='form-control' id='text'></textarea>
        <input type='hidden' name='slug' value="<?php echo $post['slug']; ?>">
        <br>
        <button class='btn btn-outline-secondary' type='submit'>Senden</button>
    </div>
  </form>
</section>
