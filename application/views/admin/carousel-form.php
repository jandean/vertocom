<section class="main row">
	<?php echo $sidemenu; ?>
	<div class="core small-10 columns">
		<h3><?php echo $title; ?></h3>
		<hr>
		<div><?php echo $message; ?></div>
		<?php echo form_open_multipart('pages/carousel_form/' . @$result->id); ?>
			<input type="hidden" name="id" value="<?php echo set_value('id', @$result->id); ?>" />
			<label>Image Carousel
				<input type="file" name="image" />
			</label>
			<br/>
			<label>Link
				<input type="text" placeholder="URL" name="url" id="url" value="<?php echo set_value('url', @$result->url); ?>" />
			</label>
			<hr>
			<button type="submit" class="button tiny radius alert">PUBLISH</button>
			<a href="<?php echo base_url('pages/carousel'); ?>" class="button tiny radius secondary">CANCEL</a>
		<?php echo form_close(); ?>
	</div>

</section>