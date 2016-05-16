    <div class="page">
      <div class="mast sponsored">
        <div class="section">
          <div class="content">
            <div class="wrapper">
              <ol class="breadcrumb">
                <!-- <li><a href="#">Home</a></li>
                <li><a href="#">Page</a></li>
                <li class="active">Current</li> -->
              </ol>
            </div>
          </div>
        </div><!-- .section -->
        <div class="section">
          <div class="content">
            <div class="wrapper">
              <div class="row">
                <div class="col-xs-12">
                  <div class="inner">
                    <h2 class="heading">Verto Communications</h2>
                    <p class="lead"><?php echo $intro->content; ?></p>
                    <div class="actions">
                      <div class="pull-left">
                        <a href="#" class="btn btn-success">Inquire Now</a>
                        <a href="#" class="btn btn-primary">Get a Free Trial</a>
                      </div><!-- .pull-left -->
                    </div><!-- .actions -->
                    
                    <!--
<ul class="nav nav-tabs">
                      <li class="active"><a href="#">Profile</a></li>
                      <li><a href="#">Programs</a></li>
                      <li><a href="#">Alumni</a></li>
                    </ul>
-->                    
                  </div>
                </div><!-- .col-xs-12 -->
              </div><!-- .row -->
            </div><!-- .wrapper -->        
          </div><!-- .content -->
        </div><!-- .section -->
      </div><!-- .mast -->
      
      <div class="area">
        <div class="section listing">
          <div class="header">
            <div class="wrapper">
              <div class="row">
                <div class="col-xs-3">
                  <div class="inner">
                    <a class="thumb fancy" href="#">
                      <img src="<?php echo base_url($this->config->item('image_upload_path') . $featured_product->image); ?>" atl="fancy" />
                    </a>
                  </div>
                </div>
                <div class="col-xs-9">
                  <div class="inner">
                    <h2 class="heading"><?php echo $featured_product->title; ?></h2>
                    <p class="lead"><?php echo $featured_product->content; ?></p>
                    <div class="actions">
                      <div class="pull-left"><a href="<?php echo base_url('main/products'); ?>" class="btn btn-success">More about our Products</a></div><!-- .pull-left -->
                    </div><!-- .actions -->
                  </div><!-- .inner -->
                </div><!-- .col-xs-9 -->                
              </div><!-- .row -->
            </div><!-- .wrapper -->

            <div class="wrapper">
              <div class="row">
                <div class="col-xs-3">
                  <div class="inner">
                    <a class="thumb fancy" href="#">
                      <img src="<?php echo base_url($this->config->item('image_upload_path') . $featured_service->image); ?>" atl="fancy" />
                    </a>
                  </div>
                </div>
                <div class="col-xs-9">
                  <div class="inner">
                    <h2 class="heading"><?php echo $featured_service->title; ?></h2>
                    <p class="lead"><?php echo $featured_service->content; ?></p>
                    <div class="actions">
                      <div class="pull-left"><a href="<?php echo base_url('main/services'); ?>" class="btn btn-success">More about our Services</a></div><!-- .pull-left -->
                    </div><!-- .actions -->
                  </div><!-- .inner -->
                </div><!-- .col-xs-9 -->                
              </div><!-- .row -->
            </div><!-- .wrapper -->

          </div><!-- .header --> 
        </div><!-- .section -->
      </div><!-- .area -->
    </div><!-- .page -->




    
    <a href="#" data-reveal-id="myModal">Click Me For A Modal</a>

<div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 id="modalTitle">Awesome. I have it.</h2>
  <p class="lead">Your couch.  It is mine.</p>
  <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>