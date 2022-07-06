<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Users Table</h4>
            <a href="<?php echo base_url; ?>Users/add_users"><button class="btn btn-warning btn-fw" style="position:absolute; top:5%; right:40px;" id="adduser">Add User</button></a>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>
                      <div class="form-check form-check-muted m-0">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                        </label>
                      </div>
                    </th>
                    <th> SR No.</th>
                    <th> Full name</th>
                    <th> email</th>
                    <th> profile_pic </th>
                    <th> User_role</th>
                    <th> status </th>
                    <th> View</th>
                    <th> Edit </th>
                    <th> Delete </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (!empty($data['data'])) {
                    $records = array_values($data['data']);
                    foreach ($records as $key) { ?>
                      <tr>
                        <td>
                          <div class="form-check form-check-muted m-0">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                            </label>
                          </div>
                        </td>
                        <td><?php echo $key->id; ?></td>
                        <td><?php echo $key->first_name . $key->last_name; ?></td>
                        <td><?php echo $key->email; ?></td>
                        <td><?php echo $key->profile_pic; ?></td>
                        <td><?php echo $key->role_as; ?></td>
                        <td><?php echo $key->is_deleted; ?></td>
                        <td>
                          <a href="<?php echo base_url; ?>Users/single_user"><button type="button" class="btn btn-info btn-icon-text">
                              <i class="mdi mdi-view-grid"></i> View </button></a>
                        </td>
                        <td>
                          <button type="button" class="btn btn-primary btn-icon-text">
                            <i class="mdi mdi-lead-pencil"></i> Edit </button>
                        </td>
                        <td>
                          <button type="button" class="btn btn-danger btn-icon-text" id="<?php echo $key->id; ?>" onclick="del(this.id)">
                            <i class="mdi mdi-delete"></i> Delete </button>
                        </td>
                      </tr>
                    <?php }
                  } else { ?>
                    <tr>
                      <td style="color:white; font-size:large;">No record found</td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- content-wrapper ends -->
  <script>
    function del(s) {
      $.ajax({
        type: "post",
        url: "<?php echo base_url; ?>Users/delete_user",
        data: {
          "did": s
        },
        success: function(data) {
          location.reload();
        }
      });
    }
  </script>