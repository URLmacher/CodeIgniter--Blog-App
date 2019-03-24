<div class="jumbotron">
  <h1 class="display-3"><?=$title ?></h1>
</div>
<ul class="list-group">
<?php foreach($categories as $category) :?>

    <li class="list-group-item">
      <a href="<?php echo site_url('/categories/posts/'.$category['id']); ?>">
        <?php echo $category['name']; ?>
      </a>
      <?php if($this->session->userdata('user_id') == $category['user_id']) : ?>
        
        <?php echo form_open_multipart('categories/delete/'.$category['id']); ?>
          <fieldset class="cat-delete">
            <div class="form-group">
              <label for="delete">Kategorie löschen</label>

              <input name='name' type="submit"  class="btn-link text-danger " id="delete" value='X'>
            </div>
          </fieldset>
        </form>

      <?php endif; ?>
    <li>

<?php endforeach; ?>
</ul>