<?php include("head.php"); ?>
<div class="container">
  <div class="row justify-content-center mt-2">
    <div class="col-sm-6 border-dark">
      <div class="card">
        <div class="card-header bg-danger text-light">
          <h1>Masukan Data</h1>
        </div>
        <div class="card-body p-5">
          <form method="post" action="simpan_data.php" class="form-controls mt-3" name="login">
            <div class="row mb-3">
              <label for="nama" class="form-label col-3 col-form-label">Name :</label>
              <div class="col-9">
                <input type="text" class="form-control" name="nama" aria-describedby="helpId" placeholder="Full Name">
              </div>
            </div>
            <div class="row mb-5">
              <label for="password" class="form-label col-3 col-form-label">Password :</label>
              <div class="col-9">
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <fieldset class="row mb-3 mt-3">
                <legend class="col-form-label col-sm-3 pt-0">Level</legend>
                <div class="col-sm-9">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="level" id="gridRadios1" value="1" checked>
                    <label class="form-check-label" for="level">
                      Admin
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="level" id="gridRadios2" value="2">
                    <label class="form-check-label" for="level">
                      Operator
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="level" id="gridRadios3" value="3">
                    <label class="form-check-label" for="level">
                      User
                    </label>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class="mt-5 float-end">
              <button type="submit" value="login" name="login" class="btn btn-primary align-content-end">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include("foot.php"); ?>