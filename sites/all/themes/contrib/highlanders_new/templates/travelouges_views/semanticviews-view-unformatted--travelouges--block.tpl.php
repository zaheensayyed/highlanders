<?php
/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
/*echo '<pre>';
print_r($rows);
exit;*/
?>
<?php /*?>
<?php if (!empty($title)): ?>
  <<?php print $group_element; ?><?php print drupal_attributes($group_attributes); ?>>
    <?php print $title; ?>
  </<?php print $group_element; ?>>
<?php endif; ?>
<?php if (!empty($list_element)): ?>
  <<?php print $list_element; ?><?php print drupal_attributes($list_attributes); ?>>
<?php endif; ?>

  <?php if (!empty($row_element)): ?>
  <<?php print $row_element; ?><?php print drupal_attributes($row_attributes[$id]); ?>>
  <?php endif; ?>

  
  <?php if (!empty($row_element)): ?>
  </<?php print $row_element; ?>>
  <?php endif; ?>
<?php */?>
<div class="row no-gutter">
  <?php foreach ($rows as $id => $row): ?>
    <div class="col-lg-4 col-sm-6">
          <?php print $row; ?>
    </div>
  <?php endforeach; ?>
</div>

<?php /*?>
<?php if (!empty($list_element)): ?>
  </<?php print $list_element; ?>>
<?php endif; ?>
<?php */?>