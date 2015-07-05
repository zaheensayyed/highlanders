<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
$i = 1;
?>
<div class="window">
  	<div class="image_reel">
    <?php foreach ($rows as $id => $row): ?>
        <?php print $row; ?>
    <?php endforeach; ?>
  	</div>
</div>
<div class="paging">
  	<?php foreach ($rows as $id => $row): ?>
    	<?php echo '<a rel="'.$i.'" href="#">'.$i.'</a>';?>
    	<?php $i++;?>
  	<?php endforeach ?>
</div>