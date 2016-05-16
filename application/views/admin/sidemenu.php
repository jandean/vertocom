<?php
switch ($page) {
	case 'service':
		?>
		<div class="section">
        <div class="content content-bar">
          <div class="wrapper">
            <nav class="navbar navbar-default border-bottom" role="navigation">
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <div class="navbar-default">
                  <div class="btn-group">
                    <a href="<?php echo base_url('admin/form/' . CONTENT_SERVICE_STR); ?>" class="btn btn-success btn-sm">Create A New <?php echo CONTENT_SERVICE_STR; ?></a>
                  </div>
                </div>

              </div> 
            </nav>
          </div>
        </div>
	<?php
	break;

	case 'product':
		?>
		<div class="section">
        <div class="content content-bar">
          <div class="wrapper">
            <nav class="navbar navbar-default border-bottom" role="navigation">
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <div class="navbar-default">
                  <div class="btn-group">
                    <a href="<?php echo base_url('admin/form/' . CONTENT_PRODUCT_STR); ?>" class="btn btn-success btn-sm">Create A New <?php echo CONTENT_PRODUCT_STR; ?></a>
                  </div>
                </div>

              </div> 
            </nav>
          </div>
        </div>
	<?php
	break;

	case 'pages':
	case 'features':
		?>

		<div class="section">
        <div class="content content-bar">
          <div class="wrapper">
            <nav class="navbar navbar-default border-bottom" role="navigation">
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav nav-rod navbar-right">
                  <li <?php echo $active == 'home' ? 'class="active"' : ''; ?>><a href="<?php echo base_url('pages/home'); ?>">Home</a></li>
                  <li <?php echo $active == 'product' ? 'class="active"' : ''; ?>><a href="<?php echo base_url('pages/product'); ?>">Product</a></li>
                  <li <?php echo $active == 'service' ? 'class="active"' : ''; ?>><a href="<?php echo base_url('pages/service'); ?>">Service</a></li>  
                  <li <?php echo $active == 'carousel' ? 'class="active"' : ''; ?>><a href="<?php echo base_url('pages/carousel'); ?>">Call Center Facility</a></li>      
                </ul>

                <?php if ($active == 'carousel'): ?>
                <div class="navbar-default">
                  <div class="btn-group">
                    <a href="<?php echo base_url('pages/carousel_form'); ?>" class="btn btn-success btn-sm">Upload A New Image</a>
                  </div>
                </div>
            	<?php endif; ?>

              </div> 
            </nav>
          </div>
        </div>
	<?php
	break;
	
	default:
		?>
		<div class="section">
        <div class="content content-bar">
          <div class="wrapper">
            <nav class="navbar navbar-default border-bottom" role="navigation">
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <div class="navbar-default">
                  <div class="btn-group">
                    <a href="<?php echo base_url('auth/register'); ?>" class="btn btn-success btn-sm">Create A New User</a>
                  </div>
                </div>

              </div> 
            </nav>
          </div>
        </div>
	<?php
	break;
} ?>