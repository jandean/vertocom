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
    <?php echo $sidemenu; ?>
    
    <div class="content content-table">
          <div class="wrapper">
            <table>
              <thead>
                <tr>
                    <th width="50">ID</th>
                    <th>Image</th>
                    <th>Link</th>
                    <th width="250">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($recordset) : ?>
                    <?php foreach ($recordset as $row) : ?>
                    <tr>
                        <!-- <td><input type="checkbox"></input></td> -->
                        <td class="delete-id"><?php echo $row->id; ?></td>
                        <td><img src="<?php echo base_url('assets/images/uploads/' . $row->img); ?>" width="80"></td>
                        <td><?php echo $row->url; ?></td>
                        <td>
                            <a class="btn btn-default btn-xs" href="<?php echo base_url('pages/carousel_form/' . $row->id); ?>">Edit</a>
                            <a class="btn btn-danger btn-xs delete" href="" data-reveal-id="delete-prompt">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" align="center">No Data</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
            <hr>
          </div>
        </div><!-- .content -->

      </div><!-- .section -->

    </div><!-- .area -->

<?php $data = array('controller' => 'pages', 'function' => 'delete', 'goto' => 'pages/carousel'); $this->load->view('admin/modal-delete', $data); ?>