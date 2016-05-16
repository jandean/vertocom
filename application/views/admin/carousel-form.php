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
	      <p>Add here your images for Call Center Facility page.</p>

			<?php echo form_open_multipart('pages/carousel_form/' . @$result->id); ?>
				<input type="hidden" name="id" value="<?php echo set_value('id', @$result->id); ?>" />
				<div class="row">
                    <div class="col-xs-6">
                      <div class="form-group">
                        <label class="control-label" for="#">Image for Carousel</label>
                        <input type="file" name="image" />
                      </div>                      
                    </div>

                    <div class="col-xs-6">
                      <div class="form-group">
                        <label class="control-label" for="#">Image URL</label>
                        <input type="text" class="form-control" placeholder="URL" name="url" id="url" value="<?php echo set_value('url', @$result->url); ?>" />
                      </div>                      
                    </div>
                </div>


				<hr>
				<button class="btn btn-success" type="submit">PUBLISH</button>
				<a class="btn btn-default" href="<?php echo base_url('pages/carousel/'); ?>">CANCEL</a>
			<?php echo form_close(); ?>
		</fieldset>

        </div><!-- .wrapper -->          
    </div>