<div class="jumbotron">
  <h1 class="display-3"><?=$title ?></h1>
</div>
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('categories/create'); ?>
  <fieldset>
   
    <div class="form-group">
      <label for="exampleInputEmail1">Kategorie hinzufügen</label>
      <input name='name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Hier die Kategorie reinschreiben">
    </div>
 
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
   
    
  </fieldset>
</form>
