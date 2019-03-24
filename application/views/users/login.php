<div class="jumbotron">
  <h1 class="display-3"><?=$title ?></h1>
</div>
<?php echo validation_errors(); ?>
<section class='register'>
<section class='col-md-4 col-md-offset-4'>
    <?php echo form_open_multipart('users/login'); ?>
        <fieldset>
        
            <div class="form-group">
            <label for="username">Username</label>
            <input id='username' type="text" class="form-control" name='username' placeholder='Username' required autofocus>
            </div>

            <div class="form-group">
            <label for="password">Password</label>
            <input id='password' type="password" class="form-control" name='password' required autofocus>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Logim</button>
            </div>
            
        </fieldset>
    </form>
</section>
