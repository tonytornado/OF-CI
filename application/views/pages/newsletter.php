<section id="signup" class="text-center mx-auto col-md-6 jumbotron bg-secondary">
  <h2>Sign up for our newsletter!</h2>
  <div class="form-group">
    <?php echo validation_errors(); ?>
    <?php echo form_open(''); ?>
        <p>Like what we have to say?  Enjoy inane ramblings from a madman?  Want your computer fixed while you sweat?  Sign up now!</p>
        <input class="form-control-sm form-control" type="text" name="name" placeholder="Name"/><br />
        <input class="form-control-sm form-control" type="email" name="email" placeholder="E-Mail Address"/>
        <br />
        <button type="submit" name="submit" class="btn btn-primary btn-sm btn-rounded">Newsletter Go!</button>
    </form>
  </div>
</section>