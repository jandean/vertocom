<div class="area">
      <div class="section">
        <div class="content content-title">
          <div class="wrapper">  
            <div class="row">
              <div class="col-xs-12">
                <h1><?php echo lang('index_heading');?> Management</h1>
              </div><!-- .col-xs-12 -->                
            </div><!-- .row -->
          </div><!-- .wrapper -->        
        </div><!-- .content -->
      </div><!-- .section -->

      <div class="section">
        <div class="content content-bar">
          <div class="wrapper">
            <nav class="navbar navbar-default border-bottom" role="navigation">
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <!-- <ul class="nav navbar-nav nav-rod navbar-right">
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Resources</a></li>  
                  <li class="active"><a href="#">Articles</a></li>  
                  <li><a href="#">Blogs</a></li>      
                </ul> -->

                <div class="navbar-default">
                  <div class="btn-group">
                    <a href="<?php echo base_url('auth/create_user'); ?>" class="btn btn-success btn-sm"><?php echo lang('index_create_user_link'); ?></a>
                  </div>
                </div>

              </div><!-- /.navbar-collapse -->            
            </nav>
          </div><!-- .wrapper -->
        </div><!-- .content -->

        <div class="content content-table">
          <div class="wrapper">
            <table>
              <thead>
                <tr>
                  	<th><?php echo lang('index_fname_th');?></th>
					<th><?php echo lang('index_lname_th');?></th>
					<th><?php echo lang('index_email_th');?></th>
					<th><?php echo lang('index_action_th');?></th>
                </tr>
              </thead>
              <tbody>

              <?php foreach ($users as $user):?>
				<tr>
		            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
		            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
		            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
					<td class="actions">
						<?php if ($user->active) : ?>
                    	<a class="btn btn-danger btn-xs" href="<?php echo base_url('auth/deactivate/'.$user->id); ?>">Deactivate</a>
                    	<?php else: ?>
                    	<a class="btn btn-success btn-xs" href="<?php echo base_url('auth/activate/'.$user->id); ?>">Activate</a>
                    	<?php endif; ?>
                    	<a class="btn btn-default btn-xs" href="<?php echo base_url('auth/edit_user/'.$user->id); ?>">Edit</a>
                    </td>
				</tr>
			  <?php endforeach;?>
                
            </table>
            <hr>
          </div>
        </div><!-- .content -->

      </div><!-- .section -->

    </div><!-- .area -->