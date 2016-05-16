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
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Active</th>
                    <th>Featured</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>

                <?php if ($recordset) : ?>
                    <?php foreach ($recordset as $row) : ?>
                    <tr>
                        <!-- <td><input type="checkbox"></input></td> -->
                        <td class="delete-id"><?php echo $row->id; ?></td>
                        <td><img src="<?php echo base_url('assets/images/uploads/' . $row->image); ?>" width="80"></td>
                        <td><?php echo $row->title; ?></td>
                        <td><?php echo $row->is_active == 1 ? 'Yes' : 'No'; ?></td>
                        <td><?php echo $row->is_featured == 1 ? 'Yes' : 'No'; ?></td>
                        <td>
                            <a class="btn btn-default btn-xs" href="<?php echo base_url('admin/form/' . $content_type . '/' . $row->id); ?>">Edit</a>

                            <?php if ($row->is_active) : ?>
                            <a class="btn btn-danger btn-xs" href="<?php echo base_url('admin/status_update/deactivate/'.$row->id.'/'.$content_type); ?>">Deactivate</a>
                            <?php else: ?>
                            <a class="btn btn-success btn-xs" href="<?php echo base_url('admin/status_update/activate/'.$row->id.'/'.$content_type); ?>">Activate</a>
                            <?php endif; ?>

                            <?php if ($row->is_featured) : ?>
                            <a class="btn btn-danger btn-xs" href="<?php echo base_url('admin/status_update/unfeature/'.$row->id.'/'.$content_type); ?>">Unfeature</a>
                            <?php else: ?>
                            <a class="btn btn-success btn-xs" href="<?php echo base_url('admin/status_update/feature/'.$row->id.'/'.$content_type); ?>">Feature</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8" align="center">No Data</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
            <hr>
          </div>
        </div><!-- .content -->

      </div><!-- .section -->

    </div><!-- .area -->