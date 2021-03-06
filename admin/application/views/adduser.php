<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">User Registration Form</h4>

          <form class="forms-sample" id="frm" method="POST">
            <div class="form-group">
              <label for="exampleInputName1">First name</label>
              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name">
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Last name</label>
              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword4">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Gender</label>
                  <div class="col-sm-4">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="gender" id="gender" value="male"> Male</label>
                    </div>
                  </div>
                  <div class="col-sm-5">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="gender" id="gender" value="female"> Female </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Select Role</label>
                <div class="col-sm-9">
                  <select class="form-control" name="role">
                    <option value="1">HR</option>
                    <option value="2">Team Leader</option>
                    <option value="3">Employee</option>
                  </select>
                </div>
              </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
            <button type="reset" class="btn btn-dark">Reset</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    jQuery('#frm').validate({
      rules: {
        first_name: "required",
        last_name: "required",
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
          minlength: 12
        },
        gender: "required",
        role: "required",
      },
      messages: {
        first_name: "Please enter your first_name",
        last_name: "Please enter your last_name",
        email: {
          required: "Please enter email",
          email: "Please enter valid email",
        },
        password: {
          required: "Please enter your password",
          minlength: "Password must be 12 char long"
        },
        gender:"Please select gender",
      },
      submitHandler: function(form) {
        form.submit();
      }
    });
  </script>

  <!-- content-wrapper ends -->