<div class="jumbotron">
  <h1 class="display-3"><?=$title ?></h1>
</div>
<?php echo validation_errors(); ?>
<section class='register'>
<?php echo form_open_multipart('users/register'); ?>
  <fieldset>
 
    <div class="form-group">
      <label for="name">Name</label>
      <input id='name' type="text" class="form-control" name='name' placeholder='Name'>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input id='email' type="email" class="form-control" name='email' placeholder='Email'>
    </div>

    <div class="form-group">
      <label for="zipcode">Postleitzahl</label>
      <input id='zipcode' type="text" class="form-control" name='zipcode' placeholder='PLZ'>
    </div>

    <div class="form-group">
      <label for="username">Username</label>
      <input id='username' name='username' type="text" class="form-control"  placeholder='Username'>
    </div>

    <div class="form-group">
      <label for="password">Passwort</label>
      <input id='password' name='password' type="password" class="form-control" >
    </div>

    <div class="form-group">
      <label for="password2">Passwort wiederholen</label>
      <input id='password2' name='password2' type="password" class="form-control" >
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
   
    
  </fieldset>
</form>
</section>
