<section class="main row">
	<?php echo $sidemenu; ?>
	<div class="core small-10 columns">
		<h3><?php echo $title; ?></h3>
		<hr>
		<div><?php echo $message; ?></div>
		<?php echo form_open_multipart('admin/form/' . $content_type . '/' . @$result->id); ?>
			<input type="hidden" name="article_id" value="<?php echo set_value('article_id', @$result->id); ?>" />
			<input type="hidden" id="content_type" value="<?php echo $content_type; ?>" />
			<label>Title
				<input type="text" placeholder="Title" name="title" id="title" value="<?php echo set_value('title', @$result->title); ?>" />
			</label>
			<br/>
			<label>Slug
				<input type="text" placeholder="Title-Slug" name="slug" id="slug" value="<?php echo set_value('slug', @$result->slug); ?>"  />
			</label>
			<br/>
			<label>Content</label>
				<textarea rows="10" placeholder="Article Content" name="content"><?php echo set_value('content', @$result->content); ?></textarea>
			<br/>
			<label>Cover Image
				<input type="file" name="image" />
			</label>
			<br/>
			<label>
				<input type="checkbox" name="is_active" value="1" <?php echo set_value('is_active', @$result->is_active) == 1 ? "checked" : ""; ?> /> Active
			</label>
			<br/>
			<label>
				<input type="checkbox" name="is_featured" value="1" <?php echo set_value('is_featured', @$result->is_featured) == 1 ? "checked" : ""; ?> /> Featured
			</label>
			<hr>
			<button type="submit" class="button tiny radius alert">PUBLISH</button>
			<a href="<?php echo base_url('admin/main/' . $content_type); ?>" class="button tiny radius secondary">CANCEL</a>
		<?php echo form_close(); ?>
	</div>

</section>