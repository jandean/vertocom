<div class="area">
  <div class="section">
    <div class="content">
      <div class="wrapper">                            
        <div class="row">
          <div class="col-xs-6 col-xs-offset-3">
            <div class="inner">
              <h1>Administrator Login</h1>
              <?php echo $message;?>
              <div class="grey-box">
                <?php echo form_open("auth/login");?>
                  <fieldset>
                    <div class="form-group">
                      <label class="control-label"><?php echo lang('login_identity_label', 'identity');?></label>
                      <?php echo form_input($identity);?>
                    </div>
                    <div class="form-group">
                      <label class="control-label"><?php echo lang('login_password_label', 'password');?></label>
                      <?php echo form_input($password);?>
                    </div>
                    <button class="btn btn-success" type="submit">Login</button>
                    <a href="forgot_password"><?php echo lang('login_forgot_password');?></a>
                  </fieldset>
                <?php echo form_close();?>
              </div>
            </div>
          </div><!-- .col-xs-12 -->                
        </div><!-- .row -->
      </div><!-- .wrapper -->        
    </div><!-- .content -->
  </div><!-- .section -->
</div><!-- .area -->
