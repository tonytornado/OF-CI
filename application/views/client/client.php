<section class="container text-center py-3">
  <h2 class="display-4 pt-4">Candidate Application</h2>
  <p class="lead">Use this form to fill in any and all details you may know about yourself right now. After filling this out, we'll contact you later to talk about your fitness goals.</p>
  <?php echo validation_errors(); ?>
  <?php echo form_open('pages/signup'); ?>
      <div class="form-group row">
        <div class="col-md-6">
          <h3 class="text-center">Basic Information</h3>
          <div class="form-group"><input class="form-control" type="text" name="firstname" placeholder="First Name*"></div>
          <div class="form-group"><input class="form-control" type="text" name="lastname" placeholder="Last Name*"></div>
          <div class="form-group"><input class="form-control" type="email" name="email" placeholder="E-mail Address*"></div>
          <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Confirm E-mail*" ></div>
          <div class="form-group">
            <label for="Sex">Biological Sex*:</label>
            <select id="Sex" class="form-control">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
          </div>
            <div class="form-group"><input class="form-control" type="text" name="age" placeholder="Age*"></div>
            <div class="form-group"><input class="form-control" type="text" name="height" placeholder="Height* (in inches)"></div>
            <div class="form-group"><input class="form-control" type="text" name="weight" placeholder="Weight* (in lbs.)"></div>
        </div>
        <div class="col-md-6">
          <h3 class="text-center">Body Measurements</h3>
          <div class="form-group"><input class="form-control" type="text" name="chest" placeholder="Chest* (in inches)"></div>
          <div class="form-group"><input class="form-control" type="text" name="waist" placeholder="Waist* (in inches)"></div>
          <div class="form-group"><input class="form-control" type="text" name="hip" placeholder="Hips* (in inches)"></div>
          <div class="form-group"><input class="form-control" type="text" name="neck" placeholder="Neck (in inches)"></div>
          <div class="form-group"><input class="form-control" type="text" name="forearm" placeholder="Forearm (in inches)"></div>
          <div class="form-group"><input class="form-control" type="text" name="tricep" placeholder="Tricep (in inches)"></div>
          <div class="form-group"><input class="form-control" type="text" name="bicep" placeholder="Bicep (in inches)" ></div>
          <div class="form-group"><input class="form-control" type="text" name="thigh" placeholder="Thigh (in inches)" ></div>
          <div class="form-group"><input class="form-control" type="text" name="calves" placeholder="Calves (in inches)" ></div>
        </div>
      </div>
      <button type="submit" name="submit" class="btn btn-primary text-center" value="Create new client">Time to learn too much!</button>
  </form>
</section>