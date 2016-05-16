<div class="area">
      <div class="section">
        <div class="content content-title">
          <div class="wrapper">  
            <div class="row">
              <div class="col-xs-12">
                <h1><?php echo $title; ?></h1>
              </div><!-- .col-xs-12 -->                
            </div><!-- .row -->
          </div><!-- .wrapper -->        
        </div><!-- .content -->
      </div><!-- .section -->
    <div class="section">

    <div class="content">
    <div class="wrapper">
      <?php echo $message; ?>

      <fieldset id="section-formsbasic">
        <?php echo form_open("auth/create_user");?>
          <div class="row">
            <div class="col-xs-6">
              <div class="form-group">
                <label class="control-label" for="#"><?php echo lang('create_user_fname_label', 'first_name');?></label>
                <?php echo form_input($first_name);?>
              </div>
            </div>

            <div class="col-xs-6">
              <div class="form-group">
                  <label class="control-label" for="#"><?php echo lang('create_user_lname_label', 'last_name');?></label>
                    <?php echo form_input($last_name);?>
              </div>
            </div>
          </div>

            <?php
            if($identity_column!=='email') {
                echo '<div class="form-group"><label class="control-label" for="#">';
                echo lang('create_user_identity_label', 'identity');
                echo '</label>';
                echo form_error('identity');
                echo form_input($identity);
                echo '</div>';
            }
            ?>

          <div class="row">
            <div class="col-xs-6">
              <div class="form-group">
                  <label class="control-label" for="#"><?php echo lang('create_user_email_label', 'email');?></label>
                    <?php echo form_input($email);?>
              </div>
            </div>

            <div class="col-xs-6">
              <div class="form-group">
                  <label class="control-label" for="#"><?php echo lang('create_user_phone_label', 'phone');?></label>
                    <?php echo form_input($phone);?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-6">
              <div class="form-group">
                  <label class="control-label" for="#"><?php echo lang('create_user_password_label', 'password');?></label>
                    <?php echo form_input($password);?>
              </div>
            </div>

            <div class="col-xs-6">
              <div class="form-group">
                  <label class="control-label" for="#"><?php echo lang('create_user_password_confirm_label', 'password_confirm');?></label>
                    <?php echo form_input($password_confirm);?>
              </div>
            </div>
          </div>


            <hr>
              <button class="btn btn-success" type="submit">ADD</button>
              <a class="btn btn-default" href="<?php echo base_url('auth'); ?>">CANCEL</a>

        <?php echo form_close();?>
      </fieldset>

    </div><!-- .wrapper -->          
  </div>
