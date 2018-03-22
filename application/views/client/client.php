<div class="container text-center py-3">
  <h2 class="display-4 pt-4">Candidate Application</h2>
  <p class="lead">Use this form to fill in any and all details you may know about yourself right now. After filling this out, we'll contact you later to talk about your fitness goals.</p>
<?php echo validation_errors(); ?>
<?php echo form_open('client/client_create'); ?>

      <div class="row">
        <div class="col-md-6">
        <h3 class="text-center">Basic Information</h3>
          <div class="form-group">
            <input class="form-control" type="text" name="firstname" placeholder="First Name*">
            <input class="form-control" type="text" name="lastname" placeholder="Last Name*">
            <input class="form-control" type="email" name="email" placeholder="E-mail Address*">
            <input class="form-control" type="email" name="email" placeholder="Confirm E-mail*" >

          </div>
          <div class="form-group">
            <Label for="Client">Biological Sex*:<br>
            <div class="form-check">
              <input class="form-check-input" type="radio" id="radio1" name="male" >
              <label class="form-check-label" for="radio1">Male</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" id="radio2" name="female">
              <label class="form-check-label" for="radio2">Female</label>

            </div>
            <br />
            <input class="form-control" type="text" name="age" placeholder="Age*">
            <input class="form-control" type="text" name="height" placeholder="Height* (in inches only)" >
            <input class="form-control" type="text" name="weight" placeholder="Weight* (in lbs.)">

          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <h3 class="text-center">Body Measurements</h3>
            <input class="form-control" type="text" name="chest" placeholder="Chest* (in inches)">
            <input class="form-control" type="text" name="waist" placeholder="Waist* (in inches)">
            <input class="form-control" type="text" name="hip" placeholder="Hips* (in inches)">
            <input class="form-control" type="text" name="neck" placeholder="Neck (in inches)">
            <input class="form-control" type="text" name="forearm" placeholder="Forearm (in inches)">
            <input class="form-control" type="text" name="tricep" placeholder="Tricep (in inches)">
            <input class="form-control" type="text" name="bicep" placeholder="Bicep (in inches)" >
            <input class="form-control" type="text" name="thigh" placeholder="Thigh (in inches)" >
            <input class="form-control" type="text" name="calves" placeholder="Calves (in inches)" >
          </div>
        </div>
      </div>
      <button type="submit" name="submit" class="btn btn-primary text-center" value="Create new client">Time to learn too much!</button>
  </form>
</div>