    <div class="page">
      <div class="mast sponsored">
        <div class="section">
          <div class="content">
            <div class="wrapper">
              <ol class="breadcrumb">
                <!-- <li><a href="/">Home</a></li>
                <li class="active">Products</li> -->
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
                    <h2 class="heading">Our Products</h2>
                    <p class="lead"><?php echo $intro->content; ?></p>
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

            <?php if ($recordset) :
            foreach ($recordset as $row) : ?>

            <div class="wrapper">
              <div class="row">
                <div class="col-xs-3">
                  <div class="inner">
                    <a class="thumb fancy" href="#">
                      <img src="<?php echo base_url($this->config->item('image_upload_path') . $row->image); ?>" alt="fancy"/>
                    </a>
                  </div>
                </div>
                <div class="col-xs-9">
                  <div class="inner">
                    <h2 class="heading"><?php echo $row->title; ?></h2>
                    <p class="lead"><?php echo $row->content; ?></p>
                  </div><!-- .inner -->
                </div><!-- .col-xs-9 -->                
              </div><!-- .row -->
            </div><!-- .wrapper -->

            <?php
            endforeach;
            endif; ?>

          </div><!-- .header --> 
        </div><!-- .section -->
      </div><!-- .area -->       
    </div><!-- .page -->