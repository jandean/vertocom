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
			<?php echo form_open_multipart('admin/form/' . $content_type . '/' . @$result->id); ?>
				<input type="hidden" name="article_id" value="<?php echo set_value('article_id', @$result->id); ?>" />
				<input type="hidden" id="content_type" value="<?php echo $content_type; ?>" />
				<div class="form-group">
	                <label class="control-label" for="#">Title:</label>
					<input type="text" class="form-control" placeholder="Title" name="title" id="title" value="<?php echo set_value('title', @$result->title); ?>" />
	            </div>
	            <div class="form-group">
	                <label class="control-label" for="#">Slug: <i>(used for url)</i></label>
					<input type="text" class="form-control" placeholder="Title-Slug" name="slug" id="slug" value="<?php echo set_value('slug', @$result->slug); ?>"  />
	            </div>
	            <div class="form-group">
	                <label class="control-label" for="#">Content:</label>
					<textarea class="form-control" placeholder="Article Content" name="content"><?php echo set_value('content', @$result->content); ?></textarea>
	            </div>
	            
	            <div class="row">
                    <div class="col-xs-3">
                      <div class="form-group">
                        <input type="checkbox" name="is_active" value="1" <?php echo set_value('is_active', @$result->is_active) == 1 ? "checked" : ""; ?> /> Active
                      </div>                      
                    </div>

                    <div class="col-xs-3">
                      <div class="form-group">
                        <input type="checkbox" name="is_featured" value="1" <?php echo set_value('is_featured', @$result->is_featured) == 1 ? "checked" : ""; ?> /> Featured
                      </div>                      
                    </div>

	            	<div class="col-xs-3">
                      <div class="form-group">
			            <label class="control-label" for="#">Cover Image</label>
						<input type="file" name="image" />
			          </div>                   
                    </div>
                </div>

				<hr>
				<button class="btn btn-success" type="submit">PUBLISH</button>
				<a class="btn btn-default" href="<?php echo base_url('admin/main/' . $content_type); ?>">CANCEL</a>
			<?php echo form_close(); ?>
	</fieldset>

    </div><!-- .wrapper -->          
	</div>