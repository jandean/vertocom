<!DOCTYPE html>
<html>
<head>
    <title>Verto Communications Admin</title>
</head>

<body>
    <nav class="top-bar" data-topbar>
        <ul class="title-area">
            <li class="name">
                <h1><a href="<?php echo base_url('admin'); ?>"><img src="<?php echo base_url(); ?>/images/logo.png"></a></h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
        </ul>

        <?php if ($this->ion_auth->logged_in() && $this->ion_auth->is_admin()): ?>
        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
                <!-- <li class="active"><a href="#">Right Button Active</a></li> -->
                <li class="has-dropdown active">
                    <a href="#">Logged in as <strong><?php echo $this->session->userdata('identity'); ?></strong></a>
                    <ul class="dropdown">
                        <li><a href="<?php echo base_url('auth/logout'); ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Left Nav Section -->
            <ul class="left">
            <li class="has-dropdown">
                <a href="#">Users</a>
                <ul class="dropdown">
                    <li><a href="<?php echo base_url('auth/create_user'); ?>">Add User</a></li>
                    <li><a href="<?php echo base_url('auth'); ?>">Manage Users</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <a href="#">Services</a>
                <ul class="dropdown">
                    <li><a href="<?php echo base_url('admin/form/' . CONTENT_SERVICE_STR); ?>">Add Service</a></li>
                    <li><a href="<?php echo base_url('admin/main/' . CONTENT_SERVICE_STR); ?>">Manage Services</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <a href="#">Products</a>
                <ul class="dropdown">
                    <li><a href="<?php echo base_url('admin/form/' . CONTENT_PRODUCT_STR); ?>">Add Product</a></li>
                    <li><a href="<?php echo base_url('admin/main/' . CONTENT_PRODUCT_STR); ?>">Manage Products</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <a href="#">Pages</a>
                <ul class="dropdown">
                    <li><a href="<?php echo base_url('pages/contact'); ?>">Contact</a></li>
                    <li><a href="<?php echo base_url('pages/terms'); ?>">Terms of Use</a></li>
                    <li><a href="<?php echo base_url('pages/policy'); ?>">Privacy Policy</a></li>
                    <li><a href="<?php echo base_url('pages/carousel'); ?>">Carousel</a></li>
                </ul>
            </li>
            </ul>
        </section>
        <?php endif; ?>
    </nav>

    <p></p>

    <!-- container -->
    <div class="container">