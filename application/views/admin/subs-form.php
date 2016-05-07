<section class="main row">
    <?php echo $sidemenu; ?>
    <div class="core small-10 columns">
    <?php echo form_open('pages/' . $type); ?>
        <?php foreach ($result as $row) : ?>
            <?php
            switch ($row->type) {
                case 5:
                case 7:
                    $type = 'Service ';
                    break;
                default:
                    $type = "Product ";
                    break;
            } ?>
            <h3><?php echo $type . $title; ?></h3>
            <hr>
            <div><?php echo $message; ?></div>
            <input type="hidden" name="page_type_<?php echo $row->type; ?>" value="<?php echo set_value('page_type', $row->type); ?>" />
            <textarea rows="12" name="content_<?php echo $row->type; ?>"><?php echo set_value('content', $row->content); ?></textarea>
            <br/>
        <?php endforeach; ?>
        <hr>
        <button type="submit" class="button tiny radius alert">PUBLISH</button>
        <a href="<?php echo base_url('pages/subheader'); ?>" class="button tiny radius secondary">CANCEL</a>
    <?php echo form_close(); ?>
    </div>
</section>