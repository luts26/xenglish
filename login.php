<?php include_once 'template/header.php';?>

<!-- button start -->
<div class="show_auth_form_btn">
  <span id="xstart" class="btn btn-light">Start</span>
</div>

<!-- auth form -->
<div class="show_form auth_form">
  <div class="col-sm-6 col-md-5 col-lg-6 form_bl">
    <div class="close_bl">
      <span class="mclose_btn">X</span>
    </div>
    <form class="form-horizontal">
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="inputLogin3" placeholder="Login">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <div class="custom-control custom-checkbox my-1 mr-sm-2">
            <input type="checkbox" class="custom-control-input" id="customControlInline">
            <label class="custom-control-label" for="customControlInline">Remember me</label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-12">
          <button type="submit" class="btn btn-primary">Sign in</button>
          <span class="btn btn-light" id="show_reg_form">Registration</span>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- registration form -->
<div class="show_form reg_form">
  <div class="col-sm-6 col-md-5 col-lg-6 form_bl">
    <div class="close_bl">
      <span class="mclose_btn">X</span>
    </div>
    <form class="form-horizontal">
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="inputLogin4" placeholder="Login">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <input type="password" class="form-control" id="inputPassword5" placeholder="Confirm Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <div class="custom-control custom-checkbox my-1 mr-sm-2">
            <input type="checkbox" class="custom-control-input" id="customControlInline">
            <label class="custom-control-label" for="customControlInline">Remember me</label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <button type="submit" class="btn btn-primary btn-lg btn-block">Registration</button>
        </div>
      </div>
    </form>
  </div>
</div>


<?php include_once 'template/footer.php';?>