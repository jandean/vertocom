<?php
switch ($page) {
	case 'service':
		?>
		<aside class="small-2 columns">
			<div class="sidebar">
				<ul class="side-nav">
					<li class="heading"><strong>SERVICE</strong></li>
					<li <?php echo $active == 'add' ? 'class="active"' : ''; ?>><a href="<?php echo base_url('admin/form/' . CONTENT_SERVICE_STR); ?>">+ Add Service</a></li>
					<li <?php echo $active == 'main' ? 'class="active"' : ''; ?>><a href="<?php echo base_url('admin/main/' . CONTENT_SERVICE_STR); ?>">All Services</a></li>
				</ul>
			</div>
		</aside>
		<?php
		break;

	case 'product':
		?>
		<aside class="small-2 columns">
			<div class="sidebar">
				<ul class="side-nav">
					<li class="heading"><strong>PRODUCT</strong></li>
					<li <?php echo $active == 'add' ? 'class="active"' : ''; ?>><a href="<?php echo base_url('admin/form/' . CONTENT_PRODUCT_STR); ?>">+ Add Product</a></li>
					<li <?php echo $active == 'main' ? 'class="active"' : ''; ?>><a href="<?php echo base_url('admin/main/' . CONTENT_PRODUCT_STR); ?>">All Products</a></li>
				</ul>
			</div>
		</aside>
		<?php
		break;

	case 'pages':
		?>
		<aside class="small-2 columns">
			<div class="sidebar">
				<ul class="side-nav">
					<li class="heading"><strong>PAGES</strong></li>
					<li <?php echo $active == 'contact' ? 'class="active"' : ''; ?>><a href="<?php echo base_url('pages/contact'); ?>">Contact</a></li>
					<li <?php echo $active == 'terms' ? 'class="active"' : ''; ?>><a href="<?php echo base_url('pages/terms'); ?>">Terms of Use</a></li>
					<li <?php echo $active == 'policy' ? 'class="active"' : ''; ?>><a href="<?php echo base_url('pages/policy'); ?>">Privacy Policy</a></li>
					<li <?php echo $active == 'carousel' ? 'class="active"' : ''; ?>><a href="<?php echo base_url('pages/carousel'); ?>">Carousel</a></li>
				</ul>
			</div>
		</aside>
		<?php
		break;

	case 'features':
		?>
		<aside class="small-2 columns">
			<div class="sidebar">
				<ul class="side-nav">
					<li class="heading"><strong>FEATURES</strong></li>
					<li <?php echo $active == 'add' ? 'class="active"' : ''; ?>><a href="<?php echo base_url('pages/carousel_form'); ?>">+ Add Image</a></li>
					<li <?php echo $active == 'carousel' ? 'class="active"' : ''; ?>><a href="<?php echo base_url('pages/carousel'); ?>">Carousel</a></li>
				</ul>
			</div>
		</aside>
		<?php
		break;
	
	default:
		?>
		<aside class="small-2 columns">
			<div class="sidebar">
				<ul class="side-nav">
					<li class="heading"><strong>USER</strong></li>
					<li <?php echo $active == 'add' ? 'class="active"' : ''; ?>><a href="<?php echo base_url('auth/register'); ?>">+ Add User</a></li>
					<li <?php echo $active == 'main' ? 'class="active"' : ''; ?>><a href="<?php echo base_url('users/index'); ?>">All Users</a></li>
				</ul>
			</div>
		</aside>
		<?php
		break;
}