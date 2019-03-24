<div class="jumbotron">
  <h1 class="display-3"><?=$title ?></h1>
</div>
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>
  <fieldset>
   
    <div class="form-group">
      <label for="exampleInputEmail1">Titel</label>
      <input name='title' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Hier den Titel reinschreiben">
     
    </div>
 
    <div class="form-group">
      <label for="editor1">Text</label>
      <textarea name='body' class="form-control" id="editor1" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="cat">Category</label>
      <select id='cat' name='category_id' class='form-select' >
        <?php foreach($categories as $category): ?>
          <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
        <?php endforeach; ?>
  </select>
    </div>
    <div class="form-group">
      <label for="img">Bilder hochladen</label>
      <input type='file' name='userfile' size='20' id='img'>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
   
    
  </fieldset>
</form>
