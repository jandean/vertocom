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
    <?php echo $sidemenu; ?>

	<div class="content">
    <div class="wrapper">
    	<?php echo $message; ?>

	    <fieldset id="section-formsbasic">
	      <p>Write here your content for <?php echo $type; ?> page.</p>

	      <?php echo form_open_multipart('pages/' . $type); ?>
		      <div class="form-group">
		        <input type="hidden" name="page_type" value="<?php echo set_value('page_type', @$result->type); ?>" />
				    <textarea class="form-control" name="content" cols="10"><?php echo set_value('content', @$result->content); ?></textarea>
		      </div><!-- form-group -->

          <div class="form-group">
            <label class="control-label" for="#">Background Image</label>
            <input type="file" name="image" />
          </div><!-- form-group -->

		      <hr>
			  <button class="btn btn-success" type="submit">PUBLISH</button>
			  <button class="btn btn-default" href="<?php echo base_url('admin'); ?>">CANCEL</button>
	      <?php echo form_open('pages/' . $type); ?>
	    </fieldset>

        </div><!-- .wrapper -->          
    </div>