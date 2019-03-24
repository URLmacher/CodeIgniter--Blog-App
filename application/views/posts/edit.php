<div class="jumbotron">
  <h1 class="display-3"><?=$title ?></h1>
</div>
<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
    <input type="hidden" name='id' value="<?php echo $post['id']; ?>" >
  <fieldset>
   
    <div class="form-group">
      <label for="exampleInputEmail1">Titel</label>
      <input value="<?php echo $post['title']; ?>" name='title' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Hier den Titel reinschreiben">
     
    </div>
 
    <div class="form-group">
      <label for="exampleTextarea">Text</label>
      <textarea name='body' class="form-control" id="editor1" rows="3"><?php echo $post['body']; ?></textarea>
      <label for="cat">Category</label>
      <select id='cat' name='category_id' class='form-select' >
        <?php foreach($categories as $category): ?>
          <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
        <?php endforeach; ?>
      </select>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
   
    
  </fieldset>
</form>
