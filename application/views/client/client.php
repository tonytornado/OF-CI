<section class="container text-center">
    <h2 class="display-4">Candidate Application</h2>
    <p class="lead">Use this form to fill in any and all details you may know about yourself right now. After filling this out, we'll contact you later to talk about your fitness goals.</p>
    <br>
    <?php echo validation_errors(); ?>
    <?php echo form_open('pages/signup'); ?>
        <div class="form-group row mx-auto" id="Candidate">
            <div class="col-lg-6 mx-auto">
              <h3 class="text-center">Basic Information</h3>
              <div class="form-group">
                <label for="firstname">First Name</label>
                <input class="form-control" type="text" name="firstname" placeholder="First Name*" id="firstname" required>
              </div>
              <div class="form-group">
                <label for="lastname">Last Name</label>
                <input class="form-control" type="text" name="lastname" placeholder="Last Name*" id="lastname" required>
              </div>
              <div class="form-group">
                <label for="age">Age</label>
                <input class="form-control" type="number" name="age" placeholder="Age" id="age" required>
              </div>
              <div class="form-group">
                <label for="email">E-mail</label>
                <input class="form-control" type="email" name="email" placeholder="E-mail Address*" id="email" required>
              </div>
              <div class="form-group">
                <label for="Sex">Biological Sex Assignment:</label>
                <select id="Sex" class="form-control" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
              </div>
            </div>
            <br><br>
            <div class="col-lg-6">
              <h3 class="text-center">Body Measurements</h3>
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="height">Height</label>
                    <input class="form-control" type="number" name="height" placeholder="(in inches)" id="height" required>
                  </div>
                  <div class="form-group">
                    <label for="weight">Weight</label>
                    <input class="form-control" type="number" name="weight" placeholder="(in lbs.)" id="weight" required>
                  </div>
                  <div class="form-group">
                    <label for="chest">Chest</label>
                    <input class="form-control" type="number" name="chest" placeholder="(in inches)" id="chest" required>
                  </div>
                  <div class="form-group">
                    <label for="waist">Waist</label>
                    <input class="form-control" type="number" name="waist" placeholder="(in inches)" id="waist" required>
                  </div>
                  <div class="form-group">
                    <label for="hip">Hip</label>
                    <input class="form-control" type="number" name="hip" placeholder="(in inches)" id="hip" required>
                  </div>
                  <!-- <div class="form-group">
                    <label for="neck">Neck</label>
                    <input class="form-control" type="number" name="neck" placeholder="(in inches)" id="neck" required>
                  </div> -->
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="forearm">Forearm</label>
                    <input class="form-control" type="number" name="forearm" placeholder="(in inches)" id="forearm" required></div>
                  <div class="form-group">
                    <label for="tricep">Triceps</label>
                    <input class="form-control" type="number" name="tricep" placeholder="(in inches)" id="tricep" required></div>
                  <div class="form-group">
                    <label for="biceps">Biceps</label>
                    <input class="form-control" type="number" name="bicep" placeholder="(in inches)" id="bicep" required></div>
                  <div class="form-group">
                    <label for="thigh">Thighs</label>
                    <input class="form-control" type="number" name="thigh" placeholder="(in inches)" id="thigh" required></div>
                  <div class="form-group">
                    <label for="calves">Calves</label>
                    <input class="form-control" type="number" name="calves" placeholder="(in inches)" id="calves" required></div>
                  </div>
                </div>
              </div>
            </div>
            <br>
          </div>
          <button type="submit" name="submit" class="btn btn-primary text-center" value="Create new client">Time to learn too much!</button>
      </form>
</section>